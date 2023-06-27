<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb89ba639c38a16b93f4d16e8e71732c2
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

        spl_autoload_register(array('ComposerAutoloaderInitb89ba639c38a16b93f4d16e8e71732c2', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb89ba639c38a16b93f4d16e8e71732c2', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb89ba639c38a16b93f4d16e8e71732c2::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
