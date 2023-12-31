<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd05da9320e5dacbb17aeebfa083978b0
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd05da9320e5dacbb17aeebfa083978b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd05da9320e5dacbb17aeebfa083978b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd05da9320e5dacbb17aeebfa083978b0::$classMap;

        }, null, ClassLoader::class);
    }
}
