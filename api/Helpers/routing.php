<?php
  namespace Soldiers\api\helpers;

  Class routing {

    public $api;

    function __construct($api) {
      $this->api = $api;
    }

    function get($api, $route, $page) {
      $api->get($route, function() use($page) {
        echo $page;
      });
    }

    function post($api, $route, $page) {
      $api->post($route, function() use($page) {
        echo $page;
      });
    }

    function put($api, $route, $page) {
      $api->put($route, function() use($page) {
        echo $page;
      });
    }

  }
