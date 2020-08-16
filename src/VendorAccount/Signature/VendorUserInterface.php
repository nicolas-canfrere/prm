<?php


namespace MyPrm\VendorAccount\Signature;

use MyPrm\Core\Signature\EntityInterface;
use MyPrm\Core\ValueObject\Identity;

/**
 * Interface VendorUserInterface
 */
interface VendorUserInterface extends EntityInterface
{
    /**
     * @return VendorAccountInterface|null
     */
    public function getVendorAccount(): ?VendorAccountInterface;
}
