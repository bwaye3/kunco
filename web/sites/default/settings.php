<?php
$databases['default']['default'] = array (
    'database' => 'kunco2',
    'username' => 'root',
    'password' => 'root',
    'prefix' => '',
    'host' => 'localhost',
    'port' => '80',
    'namespace' => 'Drupal\Core\Database\Driver\mysql',
    'driver' => 'mysql',
    'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
);

$settings['hash_salt'] = 'salt';
$settings['update_free_access'] = FALSE;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/development.services.yml';
$settings['trusted_host_patterns'] = [

];
$settings['file_scan_ignore_directories'] = [
    'node_modules',
    'bower_components',
];
$settings['entity_update_batch_size'] = 50;
$settings['entity_update_backup'] = TRUE;
$settings['config_sync_directory'] = '../config/sync';
$settings['file_temp_path'] = '/tmp';
$settings['file_private_path'] = 'sites/default/files/private';

$settings['skip_permissions_hardening'] = TRUE;
