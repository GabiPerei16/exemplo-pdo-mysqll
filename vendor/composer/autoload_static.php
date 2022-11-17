<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit085f359d9129d76e2bee804cbc9077c8
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ExemploPDOMySQL\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ExemploPDOMySQL\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit085f359d9129d76e2bee804cbc9077c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit085f359d9129d76e2bee804cbc9077c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit085f359d9129d76e2bee804cbc9077c8::$classMap;

        }, null, ClassLoader::class);
    }
}