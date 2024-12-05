<?php

require_once("Produto.php");

class Livro extends Produto{
    private string $autor;
    
    public function getDados(){
        parent::getDados();
        echo "Autor: ".$this->autor."\n";
    }

    /**
     * Set the value of autor
     */
    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }
}