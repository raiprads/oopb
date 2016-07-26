<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit114afd81402a7c4e0a9a41373e0b38bd
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit114afd81402a7c4e0a9a41373e0b38bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit114afd81402a7c4e0a9a41373e0b38bd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}