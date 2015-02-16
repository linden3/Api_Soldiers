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
      $query = $this->mysqli->query('SELECT * FROM Regimenten')
                            ->fetch_all(MYSQLI_ASSOC);

      return json_encode($query, JSON_PRETTY_PRINT);
    }

    public function getRegiment() {
      $query = $this->mysqli->query("SELECT * FROM Regimenten WHERE ID = '. $id .'")
                            ->fetch_all(MYSQLI_ASSOC);

      return json_encode($query, JSON_PRETTY_PRINT);
    }
  }
