<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6982b1867b289619eb5a702033bfe064
{
    public static $prefixesPsr0 = array (
        'N' => 
        array (
            'NigerianTime' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit6982b1867b289619eb5a702033bfe064::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
