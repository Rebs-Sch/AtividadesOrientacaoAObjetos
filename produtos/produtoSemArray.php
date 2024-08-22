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

$produto1 = new Produto();
$produto1->setDescricao(readline("O que é esse produto?"));
$produto1->setUnidadeMedida(readline("Qual é a unidade de medida desse produto?"));
$produto1->setQuantidade(readline("quantos produtos desse há?"));
$produto1->setValorUnitario(readline("Qual é o valor desse produto?"));
echo $produto1;

$produto2 = new Produto();
$produto2->setDescricao(readline("O que é esse produto?"));
$produto2->setUnidadeMedida(readline("Qual é a unidade de medida desse produto?"));
$produto2->setQuantidade(readline("quantos produtos desse há?"));
$produto2->setValorUnitario(readline("Qual é o valor desse produto?"));
echo $produto2;

$produto3 = new Produto();
$produto3->setDescricao(readline("O que é esse produto?"));
$produto3->setUnidadeMedida(readline("Qual é a unidade de medida desse produto?"));
$produto3->setQuantidade(readline("quantos produtos desse há?"));
$produto3->setValorUnitario(readline("Qual é o valor desse produto?"));
echo $produto3;

if($produto1->getValorTotal() > $produto2->getValorTotal() and $produto1->getValorTotal() > $produto3->getValorTotal()){

    echo $produto1->maiorCompra();
} else if ($produto2->getValorTotal() > $produto3->getValorTotal()){

    echo $produto2->maiorCompra();
}else{

    echo $produto3->maiorCompra();
}
