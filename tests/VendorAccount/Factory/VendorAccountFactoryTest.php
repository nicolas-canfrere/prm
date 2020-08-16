<?php


namespace MyPrm\Test\VendorAccount\Factory;

use MyPrm\Test\TestCase;
use MyPrm\VendorAccount\Factory\VendorAccountFactory;
use MyPrm\VendorAccount\Signature\VendorAccountInterface;

/**
 * Class VendorAccountFactoryTest
 */
class VendorAccountFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function create()
    {
        $uuid = 'uuid';
        $factory = new VendorAccountFactory(
            $this->identityProvider($uuid)
        );
        $vendor = $factory->create();

        $this->assertInstanceOf(VendorAccountInterface::class, $vendor);
        $this->assertInstanceOf(\DateTimeImmutable::class, $vendor->createdAt());
        $this->assertEquals($uuid, (string)$vendor->getIdentity());
    }
}
