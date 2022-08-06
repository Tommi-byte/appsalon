<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4951ab1138aa260ffd72ca54ebe26cf7
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tomi\\Appsalon\\' => 14,
        ),
        'M' => 
        array (
            'Model\\' => 6,
            'MVC\\' => 4,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tomi\\Appsalon\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4951ab1138aa260ffd72ca54ebe26cf7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4951ab1138aa260ffd72ca54ebe26cf7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4951ab1138aa260ffd72ca54ebe26cf7::$classMap;

        }, null, ClassLoader::class);
    }
}