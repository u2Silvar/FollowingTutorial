<?php declare(strict_types = 1);

namespace Example;

require __DIR__."/../vendor/autoload.php";

error_reporting(E_ALL);

$environment = "development";
/*
    error handler
*/
$whoops = new \Whoops\Run;
if($enviroment="production")
{
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
}
else
{
    $whoops->pushHandler(function($e){
        echo "Todo: Friendly error page and send an email to the developer";
    });
}

$whoops->register();

throw new \Exception;
