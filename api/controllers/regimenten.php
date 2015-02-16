<?php
  namespace Soldiers\api\controllers;

  class regimenten {

    protected $api;
    protected $mysqli;

    function __construct($api, $mysqli) {
      $this->api    = $api;
      $this->mysqli = $mysqli;
    }

    public function getRegimenten() {
      $array = array(
        'test' => 'fackka',
      );

      return json_encode($array, true);
    }
  }
