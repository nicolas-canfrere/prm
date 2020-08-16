<?php


namespace MyPrm\VendorAccount\Factory;

use MyPrm\Core\Signature\FactoryInterface;
use MyPrm\Core\Signature\IdentityProviderInterface;
use MyPrm\VendorAccount\Signature\VendorUserInterface;
use MyPrm\VendorAccount\VendorUser;

/**
 * Class VendorUserFactory
 */
class VendorUserFactory implements FactoryInterface
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
     * @return VendorUserInterface
     * @throws \ReflectionException
     */
    public function create(): VendorUserInterface
    {
        $vendorUser = new VendorUser();
        $ref = new \ReflectionClass($vendorUser);
        $vendorUserIdentity = $ref->getProperty('identity');
        $vendorUserIdentity->setAccessible(true);
        $vendorUserIdentity->setValue(
            $vendorUser,
            $this->identityProvider->generate()
        );

        return $vendorUser;
    }
}
