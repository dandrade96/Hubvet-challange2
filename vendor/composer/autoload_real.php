<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderIniteeb5fbc9172600054f16b970935068da
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

        spl_autoload_register(array('ComposerAutoloaderIniteeb5fbc9172600054f16b970935068da', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderIniteeb5fbc9172600054f16b970935068da', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticIniteeb5fbc9172600054f16b970935068da::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}