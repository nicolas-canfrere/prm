<?php


namespace MyPrm\VendorAccount;

use MyPrm\Core\ValueObject\Identity;
use MyPrm\VendorAccount\Signature\VendorTeamInterface;

/**
 * Class VendorTeam
 */
class VendorTeam implements VendorTeamInterface
{
    /**
     * @var Identity|null
     */
    private $identity;
    /**
     * @var string|null
     */
    private $name;
    /**
     * @var string|null
     */
    private $canonicalName;

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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function getCanonicalName(): ?string
    {
        return $this->canonicalName;
    }
}
