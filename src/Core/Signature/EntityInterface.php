<?php


namespace MyPrm\Core\Signature;

use MyPrm\Core\ValueObject\Identity;

/**
 * Interface EntityInterface
 */
interface EntityInterface
{
    /**
     * @return Identity|null
     */
    public function getIdentity(): ?Identity;
}
