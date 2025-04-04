<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb3ad1f6d6542bc8a0db00e86cb06c486
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jopel\\Mhs\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jopel\\Mhs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb3ad1f6d6542bc8a0db00e86cb06c486::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb3ad1f6d6542bc8a0db00e86cb06c486::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb3ad1f6d6542bc8a0db00e86cb06c486::$classMap;

        }, null, ClassLoader::class);
    }
}
