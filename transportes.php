<?php

class Veiculo{
    private int $capacidade;
    private int $passagensVendidas = 0;
    
    public function __construct(int $c){
         $this->capacidade = $c;
    }

    public function getCapacidade(): int
    {
        return $this->capacidade;
    }

    public function getPassagensVendidas(): int
    {
        return $this->passagensVendidas;
    }

    public function venderPassagens(int $qtd){

        if($this->passagensVendidas <= ($this->capacidade+$qtd)){
            echo "passagem vendida com sucesso.\n";
            $this->passagensVendidas+=$qtd;
            
            return true;
        }else{
            $this->passagensVendidas-=$qtd;

            echo "Sua compra excedeu o limite da capacidade do veículo. Atualmente, faltam ".$this->capacidade-$this->passagensVendidas." passagens para ser vendidas\n";

            return false;
        }
    }
}

$transporte = new Veiculo(55);

do{
    $quantidade = readline("Quantas passagens deseja comprar?");

    if ($quantidade <= 0){
        $transporte->venderPassagens($quantidade);
    }else{
        break; /*Sai do loop sem necessariamente sair do programa, como o die*/
    }

}while($transporte->getPassagensVendidas() <= $transporte->getCapacidade());
