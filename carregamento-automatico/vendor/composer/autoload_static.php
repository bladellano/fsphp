<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23d2addd2e298b05f071e5389bf834fc
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23d2addd2e298b05f071e5389bf834fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23d2addd2e298b05f071e5389bf834fc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit23d2addd2e298b05f071e5389bf834fc::$classMap;

        }, null, ClassLoader::class);
    }
}
