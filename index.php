<?php

  require "vendor/autoload.php";

  // Controller includes
  use Soldiers\Api\routes\regimenten;
  use Soldiers\Api\routes\burgers;

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

  // Routes
  $api->get('/', $regimenten->getRegimenten());

  // Bootstrap the api
  $api->run();
