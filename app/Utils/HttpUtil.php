<?php

namespace App\Utils;

use Illuminate\Http\Client\Response;

class HttpUtil
{
    CONST SUCCESS = 200;
    CONST UNAUTHENTICATED = 401;

    /**
     * Get the body of http response.
     */
    public function getBody(Response $response): array
    {
        if (in_array($response->status(), [
            self::SUCCESS, 
            self::UNAUTHENTICATED
        ])) {
            return json_decode($response->body(), true);
        }

        return [];
    }
}
