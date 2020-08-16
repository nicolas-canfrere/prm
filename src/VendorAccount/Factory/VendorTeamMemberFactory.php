<?php


namespace MyPrm\VendorAccount\Factory;

use MyPrm\Core\Signature\FactoryInterface;
use MyPrm\Core\Signature\IdentityProviderInterface;
use MyPrm\VendorAccount\Signature\VendorTeamMemberInterface;
use MyPrm\VendorAccount\VendorTeamMember;

/**
 * Class VendorTeamMemberFactory
 */
class VendorTeamMemberFactory implements FactoryInterface
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

    public function create(): VendorTeamMemberInterface
    {
        $vendorTeamMember = new VendorTeamMember();
        $ref = new \ReflectionClass($vendorTeamMember);
        $vendorTeamMemberIdentity = $ref->getProperty('identity');
        $vendorTeamMemberIdentity->setAccessible(true);
        $vendorTeamMemberIdentity->setValue(
            $vendorTeamMember,
            $this->identityProvider->generate()
        );

        return $vendorTeamMember;
    }
}
