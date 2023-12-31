<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20a9f6051ebf0443deb0599d22c4c6e7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit20a9f6051ebf0443deb0599d22c4c6e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit20a9f6051ebf0443deb0599d22c4c6e7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit20a9f6051ebf0443deb0599d22c4c6e7::$classMap;

        }, null, ClassLoader::class);
    }
}
