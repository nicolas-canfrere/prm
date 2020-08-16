<?php


namespace MyPrm\VendorAccount;

use MyPrm\VendorAccount\Signature\VendorAccountLevelInterface;

/**
 * Class VendorAccountLevelRegistry
 */
class VendorAccountLevelRegistry
{
    /**
     * @var  VendorAccountLevelInterface[]
     */
    private $levels = [];

    public function add(VendorAccountLevelInterface $vendorAccountLevel)
    {
        $this->levels[$vendorAccountLevel->getUniqueIdentifier()] = $vendorAccountLevel;

        return $this;
    }

    public function find(string $uniqueIdentifier): ?VendorAccountLevelInterface
    {
        return array_key_exists($uniqueIdentifier, $this->levels) ?
            $this->levels[$uniqueIdentifier] :
            null;
    }
}
