<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitff1b192bd51fac62bd6239da88b778e6
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitff1b192bd51fac62bd6239da88b778e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitff1b192bd51fac62bd6239da88b778e6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}