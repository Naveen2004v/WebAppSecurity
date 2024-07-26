<?php
class Load
{
    public static function LoadTemplate()
    {
        $directory = __DIR__ . '/templates/*.php';
        foreach (glob($directory) as $file) {
        require_once $file;
    }
    }

    public static function LoadClass()
    {
        $directory = __DIR__ . '/classes/*.php';
        foreach (glob($directory) as $file) {
        require_once $file;
    }
}
}
