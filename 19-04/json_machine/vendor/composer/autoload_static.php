<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitacf4ac8fd87aa44ce12c412abfa6e299
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JsonMachine\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JsonMachine\\' => 
        array (
            0 => __DIR__ . '/..' . '/halaxa/json-machine/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitacf4ac8fd87aa44ce12c412abfa6e299::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitacf4ac8fd87aa44ce12c412abfa6e299::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitacf4ac8fd87aa44ce12c412abfa6e299::$classMap;

        }, null, ClassLoader::class);
    }
}
