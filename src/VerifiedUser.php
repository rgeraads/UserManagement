<?php

use Rhumsaa\Uuid\Uuid;
use User\Password;
use User\Username;

final class VerifiedUser
{
    public static function generate(Uuid $uuid, Username $username, Password $password, string $firstName, string $lastName)
    {
        return new static($uuid, $username, $password, $firstName, $lastName);
    }

    private function __construct(Uuid $uuid, Username $username, Password $password, string $firstName, string $lastName)
    {

    }
}
