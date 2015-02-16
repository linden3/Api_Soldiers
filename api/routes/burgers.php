<?php
  namespace Soldiers\api\controllers;

  class burgers {

    protected $api;
    protected $mysqli;

    function __construct($api, $mysqli) {
      $this->api    = $api;
      $this->mysqli = $mysqli;
    }
  }
