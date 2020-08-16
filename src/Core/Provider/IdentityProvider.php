<?php


namespace MyPrm\Core\Provider;

use MyPrm\Core\Signature\IdentityProviderInterface;
use MyPrm\Core\ValueObject\Identity;
use Ramsey\Uuid\Uuid;

/**
 * Class IdentityProvider
 */
class IdentityProvider implements IdentityProviderInterface
{
    public function generate(): Identity
    {
        return new Identity(Uuid::uuid4());
    }
}
