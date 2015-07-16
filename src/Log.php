<?php namespace Khem\Logger;

class Log
{
    public $config;

    public function __construct()
    {
        $this->config = include_once('../config.php');
    }

    public function writeLog()
    {
        $fileHandle = fopen($this->config['dir'], 'a+');
        $content = $this->config['user'] . " visited " . $_SERVER[HTTP_HOST]. $_SERVER[REQUEST_URI] . ' at '. date('Y-m-d H:i:s') . chr(10) . chr(13);
        fwrite($fileHandle, $content);
        fclose($fileHandle);
    }

}
