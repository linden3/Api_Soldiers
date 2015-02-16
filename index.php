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
  $route->get($api, '/regiment/:id', $regimenten->getRegiment($id));
  $route->get($api, '/regimenten/all', $regimenten->getRegimenten());

  // Bootstrap the api
  $api->run();
