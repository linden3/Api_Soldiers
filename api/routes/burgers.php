<?php
  namespace Soldiers\api\routes;

  class burgers {

    protected $api;
    protected $mysqli;

    function __construct($api, $mysqli) {
      $this->api    = $api;
      $this->mysqli = $mysqli;
    }
  }
