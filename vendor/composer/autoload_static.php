<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf04a9bfbebf2799909fafff3cecf2bb
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tools\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Tools',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf04a9bfbebf2799909fafff3cecf2bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf04a9bfbebf2799909fafff3cecf2bb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
