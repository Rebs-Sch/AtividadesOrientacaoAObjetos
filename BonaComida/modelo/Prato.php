<?php

class Prato{
    private int $numero;
    private string $nome;
    private float $valor;

    public function __construct($num, $nom, $v){
        $this->numero = $num;
        $this->nome = $nom;
        $this->valor = $v;
    }

    public function __toString(){
        return "| Número: ".$this->numero." | Nome: ".$this->nome." | Valor: ".$this->valor." |\n";
    }

    /**
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }
}