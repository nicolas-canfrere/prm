<?php


namespace MyPrm\VendorAccount;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use MyPrm\Core\ValueObject\Identity;
use MyPrm\VendorAccount\Signature\VendorTeamInterface;
use MyPrm\VendorAccount\Signature\VendorTeamMemberInterface;
use MyPrm\VendorAccount\Signature\VendorUserInterface;

/**
 * Class VendorTeamMember
 */
class VendorTeamMember implements VendorTeamMemberInterface
{
    /**
     * @var Identity|null
     */
    private $identity;
    /**
     * @var VendorUserInterface|null
     */
    private $vendorUser;
    /**
     * @var VendorTeamInterface[]|Collection
     */
    private $vendorTeams;

    public function __construct()
    {
        $this->vendorTeams = new ArrayCollection();
    }

    /**
     * @inheritDoc
     */
    public function getIdentity(): ?Identity
    {
        return $this->identity;
    }

    /**
     * @inheritDoc
     */
    public function getVendorUser(): ?VendorUserInterface
    {
        return $this->vendorUser;
    }

    /**
     * @inheritDoc
     */
    public function memBerOf(): Collection
    {
        return $this->vendorTeams;
    }

    /**
     * @inheritDoc
     */
    public function isMemberOf(VendorTeamInterface $vendorTeam): bool
    {
        return $this->vendorTeams->contains($vendorTeam);
    }
}
