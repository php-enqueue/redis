<?php

namespace Enqueue\Redis\Tests\Spec;

use Enqueue\Redis\RedisConnectionFactory;
use Interop\Queue\Spec\ConnectionFactorySpec;

/**
 * @group Redis
 */
class RedisConnectionFactoryTest extends ConnectionFactorySpec
{
    protected function createConnectionFactory()
    {
        return new RedisConnectionFactory();
    }
}
