<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbce9b933f47489f033642d61ab974c81
{
    public static $files = array (
        '979dffec6fa5205cabd2c2cd1e9e6b3a' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Http/Psr7/functions.php',
        '6783aef8c489bbc166eee2536fe605d5' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
        ),
        'A' => 
        array (
            'Algolia\\AlgoliaSearch\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Algolia\\AlgoliaSearch\\' => 
        array (
            0 => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbce9b933f47489f033642d61ab974c81::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbce9b933f47489f033642d61ab974c81::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}