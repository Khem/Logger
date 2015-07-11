<?php

use Khem\Logger\Log;

class LogTest extends PHPUnit_Framework_TestCase
{
    public function testUserConfig()
    {
        $config = include('config.php');
        $this->assertArrayHasKey('user', $config);
    }

    public function testIfLogDirectoryExists()
    {
        $config = include('config.php');
        $this->assertArrayHasKey('dir', $config);
    }

    public function testIfLogDirectoryIsWritable()
    {
        $config = include('config.php');
        $isWritable = is_writable($config['dir']);
        $this->assertEquals(true,$isWritable);
    }

}
