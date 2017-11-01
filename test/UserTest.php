<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testTalkToTheWorld() {
        $expected = "Hello world!";
        $actual = 'Hello !';
        $this->assertEquals($expected, $actual);
    }
}