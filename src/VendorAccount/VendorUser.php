<?php


namespace MyPrm\VendorAccount;

use MyPrm\Core\ValueObject\Identity;
use MyPrm\VendorAccount\Signature\VendorAccountInterface;
use MyPrm\VendorAccount\Signature\VendorUserInterface;

/**
 * Class VendorUser
 */
class VendorUser implements VendorUserInterface
{
    /**
     * @var Identity|null
     */
    private $identity;
    /**
     * @var VendorAccountInterface|null
     */
    private $vendorAccount;

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
    public function getVendorAccount(): ?VendorAccountInterface
    {
        return $this->vendorAccount;
    }
}
