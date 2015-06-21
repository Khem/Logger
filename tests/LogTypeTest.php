<?php

use Khem\Logger\LogType;

class LogTypeTest extends PHPUnit_Framework_TestCase
{

    public function testIsEventLog()
    {
        $logType = new LogType();
        $logType->setLogType('event');

        $this->assertEquals('event', $logType->getLogType());
    }

}