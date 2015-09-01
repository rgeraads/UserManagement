<?php

namespace User;

use Assert\Assertion;
use Rhumsaa\Uuid\Uuid;

final class Identifier
{
    /**
     * @var string
     */
    private $identifier;

    /**
     * @return Identifier
     */
    public static function generate(): self
    {
        return new static(Uuid::uuid4()->toString());
    }

    /**
     * @param string $identifier
     *
     * @return void
     */
    private function __construct(string $identifier)
    {
        Assertion::uuid($identifier);

        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->identifier;
    }
}
