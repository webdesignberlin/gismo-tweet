<?php
/**
 * load the config files dynamic
 */
namespace Fozb;

$moduleConfigDir = __DIR__ . '/';
$moduleConfig = array();

foreach(glob($moduleConfigDir."*.config.php") as $moduleConfigPath) {
    if(!strpos($moduleConfigPath, 'module.config.php')) {
        $return = include_once($moduleConfigPath);
        $moduleConfig = array_merge($moduleConfig, $return);
    }
}

return $moduleConfig;