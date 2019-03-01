<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b76df85b52bd4cce72d3128da0937cb
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JamesGordo\\CSV\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JamesGordo\\CSV\\' => 
        array (
            0 => __DIR__ . '/..' . '/jamesgordo/php-csv-parser/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b76df85b52bd4cce72d3128da0937cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b76df85b52bd4cce72d3128da0937cb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}