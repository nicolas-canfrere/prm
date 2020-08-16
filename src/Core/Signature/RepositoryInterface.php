<?php


namespace MyPrm\Core\Signature;

use MyPrm\Core\ValueObject\Identity;

/**
 * Interface RepositoryInterface
 */
interface RepositoryInterface
{
    /**
     * @param EntityInterface $subject
     */
    public function save(EntityInterface $subject): void;

    /**
     * @param EntityInterface $subject
     */
    public function remove(EntityInterface $subject): void;

    /**
     * @param Identity $identity
     *
     * @return mixed
     */
    public function findOneByIdentity(Identity $identity);
}
