<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4616bbdcd8922434a9b9fbf5104ada89
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4616bbdcd8922434a9b9fbf5104ada89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4616bbdcd8922434a9b9fbf5104ada89::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4616bbdcd8922434a9b9fbf5104ada89::$classMap;

        }, null, ClassLoader::class);
    }
}
