<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit22fb1c3c06c6138e3e27ba6434484bb6
{
    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rych\\Random' => 
            array (
                0 => __DIR__ . '/..' . '/rych/random',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit22fb1c3c06c6138e3e27ba6434484bb6::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
