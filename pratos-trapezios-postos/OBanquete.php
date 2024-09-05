<?php

class Prato {
    private string $descricao;
    private int $quantidade;
    private float $valorUnitario;

    public function getDescricao(): string{
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self{
        $this->descricao = $descricao;

        return $this;
    }

    public function getQuantidade(): int{
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade): self{
        $this->quantidade = $quantidade;

        return $this;
    }

    public function getValorUnitario(): float{
        return $this->valorUnitario;
    }

    public function setValorUnitario(float $valorUnitario): self{
        $this->valorUnitario = $valorUnitario;

        return $this;
    }

    public function getValorTotal(){
        return $this->quantidade * $this->valorUnitario;
    }

    public function __toString(){
        return "\nPrato:". $this->descricao. "\nQuantidade:".$this->quantidade."\nPreço: ".$this->getValorTotal()."\n";
    }
}



$valorTotal = 0;
$pratos = array();

for ($i=0; $i < 3; $i++) { 
    $prato = new Prato();
    
    $prato->setDescricao(readline("Qual é a descrição desse prato que levará?"));
    $prato->setQuantidade(readline("Quantos pratos desse tipo você trará?"));
    $prato->setValorUnitario(readline("E qual é o valor unitário de cada prato desse?"));
    echo "\n";
    
    array_push($pratos, $prato);
}

foreach ($pratos as $i => $prato){
    echo "\nO prato ".$i." tem as seguintes propriedades: ";
    
    echo $prato;
}

foreach($pratos as $prato){
    $valorTotal += $prato->getValorTotal();
}

echo "\nO preço dessa janta toda foi: ".$valorTotal."\n";
