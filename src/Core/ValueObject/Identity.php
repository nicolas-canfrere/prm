<?php

namespace MyPrm\Core\ValueObject;

/**
 * Class Identity
 */
class Identity
{
    /**
     * @var string|null
     */
    private $identity;

    /**
     * Identity constructor.
     *
     * @param string|null $identity
     */
    public function __construct(?string $identity)
    {
        $this->identity = $identity;
    }

    /**
     * @return string|null
     */
    public function getIdentity(): ?string
    {
        return $this->identity;
    }

    /**
     * @param Identity $other
     *
     * @return bool
     */
    public function equals(Identity $other)
    {
        return $this->identity === $other->getIdentity();
    }

    /**
     * @return string|null
     */
    public function __toString()
    {
        return $this->identity;
    }
}
