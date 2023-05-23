<?php

class Vue{
    public $year = 1999;

    public function renderVueAccueil(){
        require_once('gabarit.php');
        require_once('vueAccueil.php');

    }
}

$veiw = new Vue();
$veiw->renderVueAccueil();



?>