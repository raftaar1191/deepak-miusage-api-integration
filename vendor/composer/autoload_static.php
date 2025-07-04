<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8eb60c0d20c0a387de88a1b15d38295
{
    public static $files = array (
        'c527efce3b9ebf20d54f5966bdc9116d' => __DIR__ . '/..' . '/wpboilerplate/wpb-register-blocks/index.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Deepak_Miusage_API_Integration\\Admin\\Main' => __DIR__ . '/../..' . '/admin/Main.php',
        'Deepak_Miusage_API_Integration\\Admin\\Partials\\Menu' => __DIR__ . '/../..' . '/admin/partials/menu.php',
        'Deepak_Miusage_API_Integration\\Admin\\Partials\\Miusage_Table' => __DIR__ . '/../..' . '/admin/partials/Miusage_Table.php',
        'Deepak_Miusage_API_Integration\\Includes\\API_Handler' => __DIR__ . '/../..' . '/includes/API_Handler.php',
        'Deepak_Miusage_API_Integration\\Includes\\Activator' => __DIR__ . '/../..' . '/includes/activator.php',
        'Deepak_Miusage_API_Integration\\Includes\\CLI_Command' => __DIR__ . '/../..' . '/includes/CLI_Command.php',
        'Deepak_Miusage_API_Integration\\Includes\\Deactivator' => __DIR__ . '/../..' . '/includes/deactivator.php',
        'Deepak_Miusage_API_Integration\\Includes\\I18n' => __DIR__ . '/../..' . '/includes/i18n.php',
        'Deepak_Miusage_API_Integration\\Includes\\Loader' => __DIR__ . '/../..' . '/includes/loader.php',
        'Deepak_Miusage_API_Integration\\Includes\\Main' => __DIR__ . '/../..' . '/includes/main.php',
        'Deepak_Miusage_API_Integration\\Includes\\Rest_Controller' => __DIR__ . '/../..' . '/includes/Rest_Controller.php',
        'Deepak_Miusage_API_Integration\\Public\\Main' => __DIR__ . '/../..' . '/public/Main.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc8eb60c0d20c0a387de88a1b15d38295::$classMap;

        }, null, ClassLoader::class);
    }
}
