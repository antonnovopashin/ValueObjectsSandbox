<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit214e988ce655db5bd25c2992d7c2b9bf
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cars\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cars\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit214e988ce655db5bd25c2992d7c2b9bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit214e988ce655db5bd25c2992d7c2b9bf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}