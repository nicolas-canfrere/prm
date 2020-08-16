<?php


namespace MyPrm\Test;

use MyPrm\Core\Signature\IdentityProviderInterface;
use MyPrm\Core\ValueObject\Identity;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase as PhpUnitTestCase;

/**
 * Class TestCase
 */
class TestCase extends PhpUnitTestCase
{
    /**
     * @param string $uuid
     *
     * @return IdentityProviderInterface|MockObject
     */
    protected function identityProvider(string $uuid)
    {
        $identityProvider = $this->createMock(IdentityProviderInterface::class);
        $identityProvider->method('generate')->willReturn(new Identity($uuid));

        return $identityProvider;
    }
}
