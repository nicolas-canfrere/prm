<?php


namespace MyPrm\Test\VendorAccount;

use MyPrm\Test\TestCase;
use MyPrm\VendorAccount\Signature\VendorAccountInterface;
use MyPrm\VendorAccount\VendorAccount;

/**
 * Class VendorAccountTest
 */
class VendorAccountTest extends TestCase
{
    /**
     * @test
     */
    public function defaults()
    {
        $vendorAccount = new VendorAccount();

        $this->assertInstanceOf(VendorAccountInterface::class, $vendorAccount);
        $this->assertNull($vendorAccount->getIdentity());
        $this->assertNull($vendorAccount->isOwnedBy());
        $this->assertNull($vendorAccount->createdAt());
        $this->assertNull($vendorAccount->getAccountLevel());
        $this->assertEquals(0, count($vendorAccount->getVendorUsers()));
    }
}
