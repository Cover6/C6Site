<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite8446ca8da3fea0813c01d7e5eb66ee0
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hybridauth\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hybridauth\\' => 
        array (
            0 => __DIR__ . '/..' . '/hybridauth/hybridauth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite8446ca8da3fea0813c01d7e5eb66ee0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite8446ca8da3fea0813c01d7e5eb66ee0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
