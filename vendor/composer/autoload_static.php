<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita36bf31c72d249f60972e0b41dd35be9
{
    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'X0rg\\Blog\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'X0rg\\Blog\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita36bf31c72d249f60972e0b41dd35be9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita36bf31c72d249f60972e0b41dd35be9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita36bf31c72d249f60972e0b41dd35be9::$classMap;

        }, null, ClassLoader::class);
    }
}
