<?php

namespace User;

final class PasswordTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_encrypt_a_password()
    {
        $password = Password::encrypt('password');

        $this->assertInstanceOf(Password::class, $password);
    }

    /**
     * @test
     */
    public function it_should_show_if_the_passwords_match()
    {
        $password = Password::encrypt('password');

        $this->assertTrue($password->verify('password'));
        $this->assertFalse($password->verify('passw0rd'));
    }
}
