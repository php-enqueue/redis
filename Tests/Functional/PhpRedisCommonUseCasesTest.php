<?php

namespace Enqueue\Redis\Tests\Functional;

use Enqueue\Redis\RedisContext;
use Enqueue\Test\RedisExtension;
use PHPUnit\Framework\TestCase;

/**
 * @group functional
 */
class PhpRedisCommonUseCasesTest extends TestCase
{
    use CommonUseCasesTrait;
    use RedisExtension;

    /**
     * @var RedisContext
     */
    private $context;

    protected function setUp(): void
    {
        $this->context = $this->buildPhpRedisContext();

        $this->context->deleteQueue($this->context->createQueue('enqueue.test_queue'));
        $this->context->deleteTopic($this->context->createTopic('enqueue.test_topic'));
    }

    protected function tearDown(): void
    {
        $this->context->close();
    }

    protected function getContext()
    {
        return $this->context;
    }
}
