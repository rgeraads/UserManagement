<?php

namespace User;

final class Password
{
    /**
     * @var string
     */
    private $hashedPassword;

    /**
     * @param string $password
     *
     * @return Password
     */
    public static function encrypt(string $password): self
    {
        $hash = password_hash($password, PASSWORD_BCRYPT);

        return new static($hash);
    }

    /**
     * @param string $password
     *
     * @return bool
     */
    public function verify(string $password)
    {
        return password_verify($password, $this->hashedPassword);
    }

    /**
     * @param string $hashedPassword
     */
    private function __construct(string $hashedPassword)
    {
        $this->hashedPassword = $hashedPassword;
    }
}
