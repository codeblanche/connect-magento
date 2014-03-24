<?php
// Tested on PHP 5.2, 5.3, 5.4

if (!function_exists('curl_init')) {
    throw new Exception('Laposta needs the CURL PHP extension.');
}

if (!function_exists('json_decode')) {
    throw new Exception('Laposta needs the JSON PHP extension.');
}

class Laposta
{
    public static $apiKey;

    public static $https = true;

    public static $apiBase = 'api.laposta.nl/v2';

    const VERSION = '1.2.0';

    public static function getApiKey()
    {
        return self::$apiKey;
    }

    public static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }

    public static function getProtocol()
    {
        return self::$https ? 'https' : 'http';
    }

    public static function setHttps($https)
    {
        self::$https = $https;
    }

    public static function getApiBase()
    {
        return self::getProtocol() . '://' . self::$apiBase;
    }
}

require(dirname(__FILE__) . '/Laposta/Util.php');
require(dirname(__FILE__) . '/Laposta/Error.php');
require(dirname(__FILE__) . '/Laposta/Resource.php');
require(dirname(__FILE__) . '/Laposta/Request.php');
require(dirname(__FILE__) . '/Laposta/Member.php');
require(dirname(__FILE__) . '/Laposta/List.php');
require(dirname(__FILE__) . '/Laposta/Field.php');
require(dirname(__FILE__) . '/Laposta/Webhook.php');
require(dirname(__FILE__) . '/Laposta/Login.php');
