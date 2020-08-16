<?php


namespace MyPrm\Test\VendorAccount;

use MyPrm\Test\TestCase;
use MyPrm\VendorAccount\Signature\VendorUserInterface;
use MyPrm\VendorAccount\VendorUser;

/**
 * Class VendorUserTest
 */
class VendorUserTest extends TestCase
{
    /**
     * @test
     */
    public function defaults()
    {
        $vendorUser = new VendorUser();

        $this->assertInstanceOf(VendorUserInterface::class, $vendorUser);
        $this->assertNull($vendorUser->getIdentity());
        $this->assertNull($vendorUser->getVendorAccount());
    }
}
