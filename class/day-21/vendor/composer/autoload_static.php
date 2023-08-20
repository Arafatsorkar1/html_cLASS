<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9cb200a3dd7a50852d1e8a112bc57391
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9cb200a3dd7a50852d1e8a112bc57391::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9cb200a3dd7a50852d1e8a112bc57391::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9cb200a3dd7a50852d1e8a112bc57391::$classMap;

        }, null, ClassLoader::class);
    }
}
