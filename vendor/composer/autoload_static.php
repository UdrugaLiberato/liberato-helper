<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3b71ee179d8d1d4f21ba074e67e8914
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Liberato\\LiberatoHelper\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Liberato\\LiberatoHelper\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc3b71ee179d8d1d4f21ba074e67e8914::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc3b71ee179d8d1d4f21ba074e67e8914::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc3b71ee179d8d1d4f21ba074e67e8914::$classMap;

        }, null, ClassLoader::class);
    }
}
