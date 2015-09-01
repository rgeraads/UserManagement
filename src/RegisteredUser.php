<?php

use User\Identifier;
use User\Password;
use User\Username;

final class RegisteredUser
{
    public static function fromAnonymousUser(AnonymousUser $anonymousUser, Username $username, Password $password, string $firstName, string $lastName)
    {
        return new static($anonymousUser->identifier(), $username, $password, $firstName, $lastName);
    }

    private function __construct(Identifier $identifier, Username $username, Password $password, string $firstName, string $lastName)
    {

    }
}
