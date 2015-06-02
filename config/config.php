<?php
require 'vendor/slim/slim/Slim/Slim.php';
require 'vendor/medoo/medoo.min.php';

// slim configuration
\Slim\Slim::registerAutoloader();
$site['app'] = new \Slim\Slim();
$app = $site['app'];

// medoo configuration
$site['db'] = new medoo([
    'database_type' => 'sqlite',
    'database_file' => 'db/data.sqlite'
]);

// site configuration
$site['base_url'] = 'http://localhost/slimedoo';