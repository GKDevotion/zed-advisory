<?php

class UrlHelper
{
    private static function getProtocol()
    {
        return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') 
            || $_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://";
    }

    private static function getHost()
    {
        return $_SERVER['HTTP_HOST'] ?? 'localhost';
    }

    private static function getBasePath()
    {
        // Auto-detect project folder (important for localhost subfolder)
        $scriptName = $_SERVER['SCRIPT_NAME']; // /core/zed-learn/index.php
        return rtrim(str_replace(basename($scriptName), '', $scriptName), '/');
    }

    public static function baseUrl($path = '')
    {
        $base = self::getProtocol() . self::getHost() . self::getBasePath();
        return rtrim($base, '/') . '/' . ltrim($path, '/');
    }

    public static function currentUrl()
    {
        return self::getProtocol() . self::getHost() . $_SERVER['REQUEST_URI'];
    }

    public static function asset($path = '')
    {
        return self::baseUrl('assets/' . ltrim($path, '/'));
    }

    public static function canonical()
    {
        return self::currentUrl();
    }
}