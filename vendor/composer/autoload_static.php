<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7433de72fb74917b87463935b69522b7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alex\\TanggalIndo\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alex\\TanggalIndo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7433de72fb74917b87463935b69522b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7433de72fb74917b87463935b69522b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7433de72fb74917b87463935b69522b7::$classMap;

        }, null, ClassLoader::class);
    }
}