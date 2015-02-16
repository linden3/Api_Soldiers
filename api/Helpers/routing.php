<?php
  namespace Soldiers\api\helpers;


  Class routing {

    public $api;

    function __construct($api) {
      $this->api = $api;
    }

    function get($api, $route, $page, $method = 'get') {
      if(!method_exists($api, $method)) {
          throw new \Exception("Invalid HTTP method '{$method}'");
      }
      $api->$method($route, function() use($page) {
          return $page;
      });
    }

  }
