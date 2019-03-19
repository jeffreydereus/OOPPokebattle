<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1dab07b227f6729a6f5416be0329670
{
    public static $classMap = array (
        'Attack' => __DIR__ . '/../..' . '/Classes/Attack.php',
        'Charmeleon' => __DIR__ . '/../..' . '/Classes/Charmeleon.php',
        'EnergyType' => __DIR__ . '/../..' . '/Classes/EnergyType.php',
        'Pikachu' => __DIR__ . '/../..' . '/Classes/Pikachu.php',
        'Pokemon' => __DIR__ . '/../..' . '/Classes/Pokemon.php',
        'Resistance' => __DIR__ . '/../..' . '/Classes/Resistance.php',
        'Weakness' => __DIR__ . '/../..' . '/Classes/Weakness.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite1dab07b227f6729a6f5416be0329670::$classMap;

        }, null, ClassLoader::class);
    }
}
