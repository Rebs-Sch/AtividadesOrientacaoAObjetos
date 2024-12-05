<?php

require_once("Midia.php");

class Dvd extends Midia{
    public function getTipo(){
        echo "A mídia é um DVD.\n";
    }
}