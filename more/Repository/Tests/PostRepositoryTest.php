<?php

declare(strict_types=1);

namespace More\Repository\Tests;

use OutOfBoundsException;
use More\Repository\Domain\PostId;
use More\Repository\Domain\PostStatus;
use More\Repository\InMemoryPersistence;
use More\Repository\Domain\Post;
use More\Repository\PostRepository;
use PHPUnit\Framework\TestCase;

class PostRepositoryTest extends TestCase
{
    private PostRepository $repository;

    protected function setUp(): void
    {
        $this->repository = new PostRepository(new InMemoryPersistence());
    }

    public function testCanGenerateId()
    {
        $this->assertEquals(1, $this->repository->generateId()->toInt());
    }

    public function testThrowsExceptionWhenTryingToFindPostWhichDoesNotExist()
    {
        $this->expectException(OutOfBoundsException::class);
        $this->expectExceptionMessage('Post with id 42 does not exist');

        $this->repository->findById(PostId::fromInt(42));
    }

    public function testCanPersistPostDraft()
    {
        $postId = $this->repository->generateId();
        $post = Post::draft($postId, 'Repository Pattern', 'Design Patterns PHP');
        $this->repository->save($post);

        $this->repository->findById($postId);

        $this->assertEquals($postId, $this->repository->findById($postId)->getId());
        $this->assertEquals(PostStatus::STATE_DRAFT, $post->getStatus()->toString());
    }
}
