<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite15540c1bb0c023a44229ae466777fda
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pondit\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pondit\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite15540c1bb0c023a44229ae466777fda::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite15540c1bb0c023a44229ae466777fda::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite15540c1bb0c023a44229ae466777fda::$classMap;

        }, null, ClassLoader::class);
    }
}
