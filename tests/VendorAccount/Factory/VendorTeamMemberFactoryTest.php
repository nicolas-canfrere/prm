<?php


namespace MyPrm\Test\VendorAccount\Factory;

use MyPrm\Test\TestCase;
use MyPrm\VendorAccount\Factory\VendorTeamMemberFactory;
use MyPrm\VendorAccount\Signature\VendorTeamMemberInterface;

/**
 * Class VendorTeamMemberFactoryTest
 */
class VendorTeamMemberFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function create()
    {
        $uuid = 'uuid';
        $factory = new VendorTeamMemberFactory(
            $this->identityProvider($uuid)
        );
        $member = $factory->create();

        $this->assertInstanceOf(VendorTeamMemberInterface::class, $member);
        $this->assertEquals($uuid, (string)$member->getIdentity());
    }
}
