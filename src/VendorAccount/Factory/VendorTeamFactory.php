<?php


namespace MyPrm\VendorAccount\Factory;

use MyPrm\Core\Signature\FactoryInterface;
use MyPrm\Core\Signature\IdentityProviderInterface;
use MyPrm\VendorAccount\Signature\VendorTeamInterface;
use MyPrm\VendorAccount\VendorTeam;

/**
 * Class VendorTeamFactory
 */
class VendorTeamFactory implements FactoryInterface
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

    public function create(): VendorTeamInterface
    {
        $vendorTeam = new VendorTeam();
        $ref = new \ReflectionClass($vendorTeam);
        $vendorTeamIdentity = $ref->getProperty('identity');
        $vendorTeamIdentity->setAccessible(true);
        $vendorTeamIdentity->setValue(
            $vendorTeam,
            $this->identityProvider->generate()
        );

        return $vendorTeam;
    }
}
