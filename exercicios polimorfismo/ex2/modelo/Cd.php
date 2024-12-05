<?php

require_once("Midia.php");

class Cd extends Midia{
    public function getTipo(){
        echo "A mídia é um CD.\n";
    }
}