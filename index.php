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
  $mysqli     = new mysqli('185.13.227.159','timjoot143_root','root1995','timjoot143_FallenSoldiers');
  $regimenten = new regimenten($api, $mysqli);
  $burger     = new burgers($api, $mysqli);
  $route      = new routing($api) ;

  // Routes Regimenenten
  $api->get('/regiment/:id', function($id) use ($regimenten) {
      $regimenten->getRegiment($id);
  });

  $api->get('/regimenten/all', function() use ($regimenten) {
      $regimenten->getRegimenten();
  });

  // Bootstrap the api
  $api->run();
