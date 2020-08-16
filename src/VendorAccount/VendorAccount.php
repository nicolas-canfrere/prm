<?php


namespace MyPrm\VendorAccount;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use MyPrm\Core\ValueObject\Identity;
use MyPrm\VendorAccount\Signature\VendorAccountInterface;
use MyPrm\VendorAccount\Signature\VendorAccountLevelInterface;
use MyPrm\VendorAccount\Signature\VendorUserInterface;

/**
 * Class VendorAccount
 */
class VendorAccount implements VendorAccountInterface
{
    /**
     * @var Identity|null
     */
    private $identity;
    /**
     * @var VendorUserInterface|null
     */
    private $owner;
    /**
     * @var \DateTimeImmutable|null
     */
    private $createdAt;
    /**
     * @var VendorAccountLevelInterface
     */
    private $accountLevel;
    /**
     * @var VendorUserInterface[]|Collection
     */
    private $vendorUsers;

    public function __construct()
    {
        $this->vendorUsers = new ArrayCollection();
    }

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
    public function isOwnedBy(): ?VendorUserInterface
    {
        return $this->owner;
    }

    /**
     * @inheritDoc
     */
    public function createdAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * @inheritDoc
     */
    public function getAccountLevel(): ?VendorAccountLevelInterface
    {
        return $this->accountLevel;
    }

    /**
     * @inheritDoc
     */
    public function getVendorUsers(): Collection
    {
        return $this->vendorUsers;
    }
}
