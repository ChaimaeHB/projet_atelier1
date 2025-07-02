<?php

use PHPUnit\Framework\TestCase;
use Chaimae\ProjetAtelier1\Greeter;

class GreeterTest extends TestCase
{
    public function testGreetReturnsExpectedMessage(): void
    {
        $greeter = new Greeter();
        $this->assertEquals('Hello from src!', $greeter->greet());
    }
}
