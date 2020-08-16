<?php


namespace MyPrm\VendorAccount\Signature;

use Doctrine\Common\Collections\Collection;
use MyPrm\Core\Signature\EntityInterface;
use MyPrm\VendorAccount\VendorAccount;

/**
 * Interface VendorAccountInterface
 */
interface VendorAccountInterface extends EntityInterface
{
    /**
     * @return VendorUserInterface|null
     */
    public function isOwnedBy(): ?VendorUserInterface;

    /**
     * @return \DateTimeImmutable|null
     */
    public function createdAt(): ?\DateTimeImmutable;

    /**
     * @return VendorAccountLevelInterface|null
     */
    public function getAccountLevel(): ?VendorAccountLevelInterface;

    /**
     * @return Collection
     */
    public function getVendorUsers(): Collection;
}
