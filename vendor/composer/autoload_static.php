<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd839d8db194702badd36edfce61d69e
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloPackagist' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitdd839d8db194702badd36edfce61d69e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
