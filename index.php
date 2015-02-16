<?php

  require "vendor/autoload.php";

  use Soldiers\Api\routes\regimenten;

  $meh = new regimenten();
  echo $meh->blaat();
