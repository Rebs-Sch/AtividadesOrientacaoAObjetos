<?php

class Poder{
    private string $descricao;
    private int $forca;

    public function __construct($d, $f){
        $this->descricao = $d;
        $this->forca = $f;
    }

    public function getForcaTotal($forcaMago){
        return $forcaMago * ($this->forca/100) + $forcaMago;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }
}