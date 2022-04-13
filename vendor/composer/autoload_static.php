<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit586b84a516c1ea86cef8daa42a1de8c3
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Templating\\' => 11,
        ),
        'F' => 
        array (
            'Framework\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Templating\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/templating',
        ),
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/framework',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit586b84a516c1ea86cef8daa42a1de8c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit586b84a516c1ea86cef8daa42a1de8c3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit586b84a516c1ea86cef8daa42a1de8c3::$classMap;

        }, null, ClassLoader::class);
    }
}