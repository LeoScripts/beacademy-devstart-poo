<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4cdaee40ba9a77c2ce5c2b91ed79edfa
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4cdaee40ba9a77c2ce5c2b91ed79edfa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4cdaee40ba9a77c2ce5c2b91ed79edfa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4cdaee40ba9a77c2ce5c2b91ed79edfa::$classMap;

        }, null, ClassLoader::class);
    }
}
