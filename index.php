<?php
require 'vendor/autoload.php';
date_default_timezone_set('America/New_York');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('app.log', Logger::WARNING));

$log->addWarning('Foo');
echo "Hello Y'all!";
