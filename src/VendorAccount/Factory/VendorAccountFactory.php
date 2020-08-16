<?php


namespace MyPrm\VendorAccount\Factory;

use MyPrm\Core\Signature\FactoryInterface;
use MyPrm\Core\Signature\IdentityProviderInterface;
use MyPrm\VendorAccount\Signature\VendorAccountInterface;
use MyPrm\VendorAccount\VendorAccount;

/**
 * Class VendorAccountFactory
 */
class VendorAccountFactory implements FactoryInterface
{
    /**
     * @var IdentityProviderInterface
     */
    private $identityProvider;

    /**
     * VendorAccountFactory constructor.
     *
     * @param IdentityProviderInterface $identityProvider
     */
    public function __construct(IdentityProviderInterface $identityProvider)
    {
        $this->identityProvider = $identityProvider;
    }

    /**
     * @return VendorAccountInterface
     * @throws \ReflectionException
     */
    public function create(): VendorAccountInterface
    {
        $vendorAccount = new VendorAccount();
        $ref = new \ReflectionClass($vendorAccount);
        $vendorAccountIdentity = $ref->getProperty('identity');
        $vendorAccountIdentity->setAccessible(true);
        $vendorAccountIdentity->setValue(
            $vendorAccount,
            $this->identityProvider->generate()
        );
        $vendorAccountCreatedAt = $ref->getProperty('createdAt');
        $vendorAccountCreatedAt->setAccessible(true);
        $vendorAccountCreatedAt->setValue(
            $vendorAccount,
            new \DateTimeImmutable()
        );

        return $vendorAccount;
    }
}
