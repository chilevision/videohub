<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb48f56fc2a753db80bcc7ca256f87012
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Chilevision\\BlackmagicVideohubPhpLibrary\\' => 41,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Chilevision\\BlackmagicVideohubPhpLibrary\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb48f56fc2a753db80bcc7ca256f87012::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb48f56fc2a753db80bcc7ca256f87012::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb48f56fc2a753db80bcc7ca256f87012::$classMap;

        }, null, ClassLoader::class);
    }
}
