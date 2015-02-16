<?php

  require "vendor/autoload.php";

  // Controller includes
  use Soldiers\Api\controllers\regimenten;
  use Soldiers\Api\controllers\burgers;

  // Helpers
  use Soldiers\Api\helpers\routing;

  // Slim config array.
  $config = [
    'templates.path' => 'api/views',
    'log.enabled'    => true,
    'debug'          => true
  ];

  // Setup some variables
  $api        = new \Slim\Slim($config);
  $mysqli     = new mysqli('localhost','root','2fU3g5Yn','sn1145_scouts');
  $regimenten = new regimenten($api, $mysqli);
  $burger     = new burgers($api, $mysqli);
  $route      = new routing($api) ;

  // Routes Regimenenten
  $route->get($api, '/', $regimenten->getRegimenten());

  // Bootstrap the api
  $api->run();
