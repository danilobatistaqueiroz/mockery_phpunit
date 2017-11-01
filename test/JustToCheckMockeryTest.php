<?php

//Filename: JustToCheckMockeryTest.php
 
use PHPUnit\Framework\TestCase;
 
class JustToCheckMockeryTest extends TestCase {
 
    protected function tearDown() {
        \Mockery::close();
    }
 
 
    function testMockeryWorks() {
        $mock = \Mockery::mock('AClassToBeMocked');
        $mock->shouldReceive('someMethod')->once();
 
        $workerObject = new AClassToWorkWith;
        $workerObject->doSomethingWit($mock);
    }
}
 
class AClassToBeMocked {}
 
class AClassToWorkWith {
 
    function doSomethingWit($anotherClass) {
        return $anotherClass->someMethod();
    }
 
}

