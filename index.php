<?php

  require "vendor/autoload.php";

  // Controller includes
  use Soldiers\Api\controllers\regimenten;
  use Soldiers\Api\controllers\burgers;

  // Helpers
  use Soldiers\Api\Helpers\routing;

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

  // Route functions
  function getRoute($api, $route, $page, $method = 'get') {
    if(!method_exists($api, $method)) {
        throw new \Exception("Invalid HTTP method '{$method}'");
    }
    $api->$method($route, function() use($page) {
        return $page;
    });
  }

  // Routes Regimenenten
  getRoute('/', $regimenten->getRegimenten());

  // Bootstrap the api
  $api->run();
