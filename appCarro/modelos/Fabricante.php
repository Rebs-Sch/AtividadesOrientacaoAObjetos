<?php

class Fabricante{
    private string $nome;
    private string $sigla;

    public function __construct($n, $s){
        $this->nome = $n;
        $this->sigla = $s;
    }

    public function __toString(){
        return $this->nome." - ".$this->sigla;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sigla
     */
    public function getSigla(): string
    {
        return $this->sigla;
    }

    /**
     * Set the value of sigla
     */
    public function setSigla(string $sigla): self
    {
        $this->sigla = $sigla;

        return $this;
    }
}