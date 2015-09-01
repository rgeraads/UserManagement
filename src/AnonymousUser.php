<?php

use User\Identifier;

final class AnonymousUser
{
    /**
     * @var Identifier
     */
    private $identifier;

    public static function generate()
    {
        return new static(Identifier::generate());
    }

    private function __construct(Identifier $identifier)
    {
        $this->identifier = $identifier;
    }

    public function identifier()
    {
        return $this->identifier;
    }
}
