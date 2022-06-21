<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3fcd888ea63dbc2cb098d72b4f16b23b
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit3fcd888ea63dbc2cb098d72b4f16b23b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3fcd888ea63dbc2cb098d72b4f16b23b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3fcd888ea63dbc2cb098d72b4f16b23b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}