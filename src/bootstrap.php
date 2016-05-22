<?php

namespace Nhkr;

require __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

//$environment = 'development';
//$environment = 'production';

/**
 * Register the error handler
 */
$whoops = new \Whoops\Run;
if (getenv('ENVIRONMENT') === 'production') {
    $whoops->pushHandler(function($e){
        echo 'Friendly error page and send an email to the developer';
    });
} else {
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
}
$whoops->register();

throw new \Exception;