<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe86b94c16da9ae9d111b3f1cbd12e65
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cooly\\Tool\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cooly\\Tool\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Cooly/Tool',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe86b94c16da9ae9d111b3f1cbd12e65::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe86b94c16da9ae9d111b3f1cbd12e65::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
