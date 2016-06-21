<?php
require 'vendor/autoload.php';
date_default_timezone_set('America/New_York');

// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;
//
// // $log = new Logger('name');
// // $log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
// // $log->addWarning('Foo');

$app = new \Slim\Slim();

$app->get('/', function(){
  echo "Hello. This is the home page.";
});

$app->get('/contact', function(){
  echo "Feel free to contact us.";
});

$app->run();
