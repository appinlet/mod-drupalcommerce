<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a3e2b83329a82d87b9841015e24bf6d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Payfast\\PayfastCommon\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Payfast\\PayfastCommon\\' => 
        array (
            0 => __DIR__ . '/..' . '/payfast/payfast-common/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a3e2b83329a82d87b9841015e24bf6d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a3e2b83329a82d87b9841015e24bf6d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7a3e2b83329a82d87b9841015e24bf6d::$classMap;

        }, null, ClassLoader::class);
    }
}