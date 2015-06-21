<?php namespace Khem\Logger;

class LogType
{
    private $logType;

    public function setLogType($logType)
    {
        $this->logType = $logType;
    }

    public function getLogType()
    {
        return $this->logType;
    }

}