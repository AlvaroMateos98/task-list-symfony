<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10cc9e70075b71883a2c5a0fb4e9cd26
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Flex\\' => 13,
        ),
        'A' => 
        array (
            'App\\Tests\\' => 10,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Flex\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/flex/src',
        ),
        'App\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit10cc9e70075b71883a2c5a0fb4e9cd26::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10cc9e70075b71883a2c5a0fb4e9cd26::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit10cc9e70075b71883a2c5a0fb4e9cd26::$classMap;

        }, null, ClassLoader::class);
    }
}