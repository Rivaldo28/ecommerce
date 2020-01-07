<?php
  require_once("vendor/autoload.php");

 
    $app = new \Slim\Slim();
    

    // Define app routes
    $app->get('/', function () {
        echo "Ok ";
    });

    // Run app
    $app->run();
?>