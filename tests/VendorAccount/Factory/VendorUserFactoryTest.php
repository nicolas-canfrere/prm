<?php


namespace MyPrm\Test\VendorAccount\Factory;

use MyPrm\Test\TestCase;
use MyPrm\VendorAccount\Factory\VendorUserFactory;
use MyPrm\VendorAccount\Signature\VendorUserInterface;

/**
 * Class VendorUserFactoryTest
 */
class VendorUserFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function create()
    {
        $uuid = 'uuid';
        $factory = new VendorUserFactory(
            $this->identityProvider($uuid)
        );
        $vendor = $factory->create();

        $this->assertInstanceOf(VendorUserInterface::class, $vendor);
        $this->assertEquals($uuid, (string)$vendor->getIdentity());
    }
}
