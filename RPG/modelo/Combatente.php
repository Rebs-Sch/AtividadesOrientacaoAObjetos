<?php

require_once("Mago.php");

class Combatente extends Mago{
    private int $forcaAtaque;

    public function __construct($n, $p, $fa){
        $this->nome = $n;
        $this->poder = $p;
        $this->forcaAtaque = $fa;
    }

    public function lancarPoder(){
        return "\nO mago ".$this->nome.", do tipo Combatente, possui uma força de ".$this->forcaAtaque." e lançou o poder de ".$this->poder->getDescricao()." com a força total de ".$this->poder->getForcaTotal($this->forcaAtaque)."\n";
    }
}