<?php

use Khem\Logger\Log;

class LogTest extends PHPUnit_Framework_TestCase
{
    public function testIfIsValidHttpRequest()
    {
        $httpMethod = $_SERVER['REQUEST_METHOD'];

        $this->assertContains($httpMethod, array('GET', 'POST', 'PUT', 'DELETE'));
    }

    public function testUserConfig()
    {
        //it the user is et
    }

    public function testIfLogDirectoryExists()
    {
        //assertFileExists
    }

    public function testIfLogDirectoryIsWritable()
    {

    }

}
