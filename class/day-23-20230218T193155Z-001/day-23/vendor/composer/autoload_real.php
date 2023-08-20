<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitef99b74b1a6734af6c02bf740e6b9a9a
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitef99b74b1a6734af6c02bf740e6b9a9a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitef99b74b1a6734af6c02bf740e6b9a9a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitef99b74b1a6734af6c02bf740e6b9a9a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}