<?php


namespace MyPrm\VendorAccount\Signature;

use MyPrm\VendorAccount\Exception\VendorAccountLevelLimitException;

/**
 * Interface VendorAccountLevelInterface
 */
interface VendorAccountLevelInterface
{
    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @return string|null
     */
    public function getUniqueIdentifier(): ?string;

    /**
     * @param VendorAccountInterface $vendorAccount
     *
     * @return mixed
     * @throws VendorAccountLevelLimitException
     */
    public function verifyVendorAccountIsInLimits(VendorAccountInterface $vendorAccount);
}
