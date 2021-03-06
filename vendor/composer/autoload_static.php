<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b18c340a49d4f7160b6a317a3984a88
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/clases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b18c340a49d4f7160b6a317a3984a88::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b18c340a49d4f7160b6a317a3984a88::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2b18c340a49d4f7160b6a317a3984a88::$classMap;

        }, null, ClassLoader::class);
    }
}
