<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c3231b0e3361c1551636890d6bb45bf
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit2c3231b0e3361c1551636890d6bb45bf::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
