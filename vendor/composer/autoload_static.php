<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit405cbf96e39a40324b7c036dd7d09ecb
{
    public static $prefixLengthsPsr4 = array (
        '_' => 
        array (
            '_3ncode\\Assets\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '_3ncode\\Assets\\' => 
        array (
            0 => __DIR__ . '/../..' . '/packages/3ncode/Assets/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit405cbf96e39a40324b7c036dd7d09ecb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit405cbf96e39a40324b7c036dd7d09ecb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}