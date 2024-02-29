<?php
namespace App\Libraries;

use App\Utils\HttpUtil;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class CmsApiLib extends HttpUtil
{
    public $cache;
    public $carbon;
    private $apiClient;

    CONST US_HIPE_ASIA_ID = 4;
    CONST JSON = 'application/json';
    CONST GRANT_TYPE = 'password';
    CONST WEBSITE_TYPE_PATH = '/api/v1/website-types';
    CONST OAUTH_TOKEN_PATH = '/api/v1/auth/login';
    CONST CUSTOMER_VOICE_PATH = '/api/v1/customer-voices';

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->apiClient = new Http();
        $this->cache = new Cache();
        $this->carbon = new Carbon();

        $this->cacheAuthResponse();
    }

    /**
     * Get find website.
     */
    public function findWebsite(): array
    {
        $path = self::WEBSITE_TYPE_PATH;
        $params = [
            'id' => self::US_HIPE_ASIA_ID
        ];
        $response = $this->apiClient::cmsApi()
            ->get($path, $params);

        return $this->getBody($response);
    }

    /**
     * Get list of customer voices.
     */
    public function getCustomerVoices(): array
    {
        $path = self::CUSTOMER_VOICE_PATH;
        $params = [
            'website_type_id' => self::US_HIPE_ASIA_ID
        ];
        $response = $this->apiClient::cmsApi()
            ->get($path,$params);

        return $this->getBody($response);
    }

    /**
     * Get specified customer voice
     */
    public function findCustomerVoiceById(int $id): array
    {
        $path = self::CUSTOMER_VOICE_PATH . '/' . $id;
        $response = $this->apiClient::cmsApi()
            ->get($path);

        return $this->getBody($response);
    }

    /**
     * Get authorization to get 
     * client token.
     */
    public function authorization(): array
    {
        $path = self::OAUTH_TOKEN_PATH;
        $requests = [
            'email' => env('CMS_API_EMAIL_ADDRESS'),
            'password' => env('CMS_API_PASSWORD')
        ];

        $response = $this->apiClient::cmsApi()
            ->post($path, $requests);

        return $this->getBody($response);
    }
    
    /**
     * Cache authorization response and renew after expiration.
     *
     * @throws Exception
     */
    public function cacheAuthResponse(): void
    {
        try {
            $expirationDate = $this->cache::get('expires_at');

            if (!$expirationDate || $this->carbon::now() >= $expirationDate) {
                $authResponse = $this->authorization();

                if ($this->isValidAuthResponse($authResponse)) {
                    $authData = $authResponse['data'];

                    if (!empty($authData)) {
                        $this->cacheValidAuthData($authData);
                    }
                }
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    /**
     * Check if the authorization response is valid.
     *
     * @param array|null $authResponse
     * @return bool
     */
    private function isValidAuthResponse(?array $authResponse): bool
    {
        return is_array($authResponse)
            && array_key_exists('status', $authResponse)
            && $authResponse['status'] !== HttpUtil::UNAUTHENTICATED;
    }

    /**
     * Cache valid authorization data.
     *
     * @param array $authData
     */
    private function cacheValidAuthData(array $authData): void
    {
        $expiresAt = $authData['expires_at'];
        $totalDuration = Carbon::now()->diffInSeconds($expiresAt);

        $this->cache::putMany($authData, $totalDuration);
    }
}
