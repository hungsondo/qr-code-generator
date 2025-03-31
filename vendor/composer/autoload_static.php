<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit57cd92a0fb619a1315315c2824f8641f
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HungSonDo\\QRCodeGenerator\\' => 26,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
        'D' => 
        array (
            'DASPRiD\\Enum\\' => 13,
        ),
        'B' => 
        array (
            'BaconQrCode\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HungSonDo\\QRCodeGenerator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
        ),
        'DASPRiD\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/dasprid/enum/src',
        ),
        'BaconQrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/bacon/bacon-qr-code/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit57cd92a0fb619a1315315c2824f8641f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit57cd92a0fb619a1315315c2824f8641f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit57cd92a0fb619a1315315c2824f8641f::$classMap;

        }, null, ClassLoader::class);
    }
}
