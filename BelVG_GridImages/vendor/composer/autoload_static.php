<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52b13908a46b1fb7481310ee1908eb42
{
    public static $files = array (
        '2c8dfd27b541ba55db95970e039dc638' => __DIR__ . '/../..' . '/registration.php',
    );

    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BelVG\\GridImages\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BelVG\\GridImages\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52b13908a46b1fb7481310ee1908eb42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52b13908a46b1fb7481310ee1908eb42::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit52b13908a46b1fb7481310ee1908eb42::$classMap;

        }, null, ClassLoader::class);
    }
}