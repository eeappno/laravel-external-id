<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf70e22ba02b4d82336bc8f9b7548d31a
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Eeappdev\\LaravelExternalId\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Eeappdev\\LaravelExternalId\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf70e22ba02b4d82336bc8f9b7548d31a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf70e22ba02b4d82336bc8f9b7548d31a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf70e22ba02b4d82336bc8f9b7548d31a::$classMap;

        }, null, ClassLoader::class);
    }
}
