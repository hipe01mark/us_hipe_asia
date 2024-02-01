<?php

namespace Tests\Unit;

use App\Services\CanvasService;
use Canvas\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Pagination\LengthAwarePaginator;
use Tests\TestCase;

class CanvasServiceTest extends TestCase
{
    use DatabaseTransactions;

    const SLUG_TOPIC = 'news-article';
    const SLUG_TAG = 'manila';
    const PAGINATE = 10;
    const DEFAULT_PAGINATE = 6;
    const NUMBER_TAKE = 1;

    protected $canvasService;

    public function setUp(): void
    {
        parent::setUp();
        $this->canvasService = app(CanvasService::class);
    }

    public function testPaginatedRecentPostsBySlugTopic(): void
    {
        $result = $this->canvasService
            ->getPaginatedPostsBySlugTopic(self::SLUG_TOPIC, self::SLUG_TAG, self::PAGINATE);
        $this->assertEquals(self::PAGINATE, $result->perPage());

        $resultDefault = $this->canvasService
            ->getPaginatedPostsBySlugTopic(self::SLUG_TOPIC);
            
        $this->assertInstanceOf(LengthAwarePaginator::class, $resultDefault);
        $this->assertEquals(self::DEFAULT_PAGINATE, $resultDefault->perPage());
    }

    public function testGetRecentPostsBySlugTopic(): void
    {
        $resultWithoutTake = $this->canvasService
            ->getRecentPostsBySlugTopic(self::SLUG_TOPIC);

        $resultWithTake = $this->canvasService
            ->getRecentPostsBySlugTopic(self::SLUG_TOPIC, self::NUMBER_TAKE);

        $this->assertInstanceOf(Collection::class, $resultWithoutTake);
        $this->assertInstanceOf(Collection::class, $resultWithTake);
    }

    public function testFindPostBySlug(): void
    {
        $post = Post::inRandomOrder()->first();

        $result = $this->canvasService
            ->findPostBySlug($post->slug);

        $this->assertInstanceOf(Post::class, $result);
    }

    public function testGetTags(): void
    {
        $resultWithTake = $this->canvasService->getTags(self::NUMBER_TAKE);
        $this->assertCount(self::NUMBER_TAKE, $resultWithTake);

        $resultDefault = $this->canvasService->getTags();
        $this->assertInstanceOf(Collection::class, $resultDefault);
    }
}
