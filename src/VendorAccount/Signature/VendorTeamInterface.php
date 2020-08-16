<?php


namespace MyPrm\VendorAccount\Signature;

use MyPrm\Core\Signature\EntityInterface;

/**
 * Interface VendorTeamInterface
 */
interface VendorTeamInterface extends EntityInterface
{
    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @return string|null
     */
    public function getCanonicalName(): ?string;
}
