<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit769c2368c8d5c2a55f6c3b60c4b21e2e
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Filter' => __DIR__ . '/../..' . '/app/Controller/Filter/Filter.php',
        'Helper' => __DIR__ . '/../..' . '/app/Controller/Sub/Helper.php',
        'Home' => __DIR__ . '/../..' . '/app/Controller/Home.php',
        'Start' => __DIR__ . '/../..' . '/app/Middleware/Start.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit769c2368c8d5c2a55f6c3b60c4b21e2e::$classMap;

        }, null, ClassLoader::class);
    }
}