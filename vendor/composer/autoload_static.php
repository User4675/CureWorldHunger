<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite016b10cd05a62e5b42fc02757bba54a
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CureWorldHunger\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CureWorldHunger\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite016b10cd05a62e5b42fc02757bba54a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite016b10cd05a62e5b42fc02757bba54a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite016b10cd05a62e5b42fc02757bba54a::$classMap;

        }, null, ClassLoader::class);
    }
}
