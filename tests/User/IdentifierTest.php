<?php

namespace User;

final class IdentifierTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_generate_an_identifier()
    {
        $identifier = Identifier::generate();

        $this->assertInstanceOf(Identifier::class, $identifier);
        $this->assertSame(36, strlen((string) $identifier));
    }
}
