<?php


namespace MyPrm\Test\VendorAccount\Factory;

use MyPrm\Test\TestCase;
use MyPrm\VendorAccount\Factory\VendorTeamFactory;
use MyPrm\VendorAccount\Signature\VendorTeamInterface;

/**
 * Class VendorTeamFactoryTest
 */
class VendorTeamFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function create()
    {
        $uuid = 'uuid';
        $factory = new VendorTeamFactory(
            $this->identityProvider($uuid)
        );
        $team = $factory->create();

        $this->assertInstanceOf(VendorTeamInterface::class, $team);
        $this->assertEquals($uuid, (string)$team->getIdentity());
    }
}
