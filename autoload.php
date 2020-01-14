<?php

/**
 * 自动加载类
 * Class Autoloader
 * @package OpenApiSDK
 */
class Autoloader
{
    /**
     * @var string
     */
    private $directory;

    /**
     * Autoloader constructor.
     * @param string $baseDirectory
     */
    public function __construct($baseDirectory = __DIR__)
    {
        $this->directory = $baseDirectory;
    }

    /**
     * 注册自定义加载函数
     */
    public static function register()
    {
        spl_autoload_register(array(new self(), 'autoload'), true);
    }

    /**
     * @param $className
     */
    public function autoload($className)
    {
        $parts = explode('\\', $className);
        array_shift($parts);
        $filepath = $this->directory . '/src/' . implode('/', $parts) . '.php';
        if (is_file($filepath)) {
            require $filepath;
        }
    }
}

Autoloader::register();
