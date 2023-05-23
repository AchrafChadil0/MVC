<?php
require_once('/wamp64/www/MVC/billet.php');
$billet = new Billet();

$billets = $billet->getBillets();
$keys = array_keys($billets[0]);











  
  ?>
