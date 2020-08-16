<?php


namespace MyPrm\VendorAccount\Signature;

use Doctrine\Common\Collections\Collection;
use MyPrm\Core\Signature\EntityInterface;

/**
 * Interface VendorTeamMemberInterface
 */
interface VendorTeamMemberInterface extends EntityInterface
{
    /**
     * @return VendorUserInterface|null
     */
    public function getVendorUser(): ?VendorUserInterface;

    /**
     * @return VendorTeamInterface[]|Collection|\Countable
     */
    public function memBerOf(): Collection;

    /**
     * @param VendorTeamInterface $vendorTeam
     *
     * @return bool
     */
    public function isMemberOf(VendorTeamInterface $vendorTeam): bool;
}
