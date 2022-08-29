<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd2e54141785a41cbd57a6860bfd34ed
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd2e54141785a41cbd57a6860bfd34ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd2e54141785a41cbd57a6860bfd34ed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd2e54141785a41cbd57a6860bfd34ed::$classMap;

        }, null, ClassLoader::class);
    }
}
