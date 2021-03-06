<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77796fedab70dae45d5dac090d61e3d9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Picqer\\Barcode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Picqer\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/picqer/php-barcode-generator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit77796fedab70dae45d5dac090d61e3d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77796fedab70dae45d5dac090d61e3d9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77796fedab70dae45d5dac090d61e3d9::$classMap;

        }, null, ClassLoader::class);
    }
}
