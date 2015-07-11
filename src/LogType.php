<?php namespace Khem\Logger;

class LogType
{
    private $logType;
    private $httpVerbs = ['GET', 'POST', 'DELETE', 'PUT'];
    // HEAD, GET, OPTIONS and TRACE ignoring safe methods

    public function __construct($httpVerb)
    {
        $this->setLogType($httpVerb);
    }

    public function setLogType($httpVerb)
    {
        $this->logType = "unknown";

        if (in_array($this->httpVerbs, $httpVerb)) {
            $this->logType = "event";
        }
    }

    public function getLogType()
    {
        return $this->logType;
    }

}
