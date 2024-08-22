<?php

class Produto{
    private string $descricao;
    private string $unidadeMedida;
    private int $quantidade;
    private float $valorUnitario;

    public function getValorTotal():float{
        return ($this->quantidade * $this->valorUnitario);
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function setUnidadeMedida(string $unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }

    public function setQuantidade(int $quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    public function setValorUnitario(float $valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }

    public function maiorCompra(){
        return "\nA maior compra é:".$this->descricao." (".$this->unidadeMedida.")\n\n";
    }

    public function __toString(){
        return "\nO produto leva os seguintes parâmetros:\n".$this->descricao." (".$this->unidadeMedida.") | ".$this->quantidade." X ".$this->valorUnitario." = ".$this->getValorTotal()."\n\n";
    }
}

$produtos = array();

for ($i=0; $i < 3; $i++) {

    $produto = new Produto();
    $produto->setDescricao(readline("O que é esse produto?"));
    $produto->setUnidadeMedida(readline("Qual é a unidade de medida desse produto?"));
    $produto->setQuantidade(readline("quantos produtos desse há?"));
    $produto->setValorUnitario(readline("Qual é o valor desse produto?"));
    echo $produto;

    array_push($produtos, $produto);
}

if($produtos[1]->getValorTotal() > $produto[2]->getValorTotal() and $produtos[1]->getValorTotal() > $produtos[3]->getValorTotal()){

    echo $produto1->maiorCompra();
} else if ($produtos[2]->getValorTotal() > $produtos[3]->getValorTotal()){

    echo $produto2->maiorCompra();
}else{

    echo $produto3->maiorCompra();
}
