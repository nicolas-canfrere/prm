<?php


namespace MyPrm\Test\VendorAccount;

use Doctrine\Common\Collections\Collection;
use MyPrm\Test\TestCase;
use MyPrm\VendorAccount\VendorTeam;

/**
 * Class VendorTeamTest
 */
class VendorTeamTest extends TestCase
{
    /**
     * @test
     */
    public function defaults()
    {
        $team = new VendorTeam();

        $this->assertNull($team->getIdentity());
        $this->assertNull($team->getName());
        $this->assertNull($team->getCanonicalName());
    }
}
