<?php


namespace MyPrm\Test\VendorAccount;

use Doctrine\Common\Collections\Collection;
use MyPrm\Test\TestCase;
use MyPrm\VendorAccount\VendorTeamMember;

/**
 * Class VendorTeamMemberTest
 */
class VendorTeamMemberTest extends TestCase
{
    /**
     * @test
     */
    public function defaults()
    {
        $member = new VendorTeamMember();

        $this->assertNull($member->getIdentity());
        $this->assertNull($member->getVendorUser());
        $this->assertInstanceOf(Collection::class, $member->memBerOf());
        $this->assertEquals(0, count($member->memBerOf()));
    }
}
