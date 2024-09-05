<?php

class Trapezio {
    private $baseMaior;
    private $baseMenor;
    private $altura;

    public function setBaseMaior($baseMaior): self{
        $this->baseMaior = $baseMaior;

        return $this;
    }

    public function setBaseMenor($baseMenor): self{
        $this->baseMenor = $baseMenor;

        return $this;
    }

    public function setAltura($altura): self{
        $this->altura = $altura;

        return $this;
    }

    public function __toString(){
        return "\nAltura: ".$this->altura."\nBase maior: ".$this->baseMaior."\nBase menor: ".$this->baseMenor."\n";
    }

    public function Area(){
        return(($this->baseMenor + $this->baseMaior) * $this->altura)/2;
    }
}

$trapezios = array();

for ($i=0; $i < 3; $i++) { 
    $trapezio = new Trapezio();
    
    $trapezio->setBaseMaior(readline("Qual é o tamanho da base menor desse trapézio? "));
    $trapezio->setBaseMenor(readline("Qual é o tamanho da base maior desse trapézio? "));
    $trapezio->setAltura(readline("Por último, qual é a altura? "));
    echo "\n";
    
    array_push($trapezios, $trapezio);
}

$maiorTrapezio = $trapezios[0];

foreach ($trapezios as $trapezio){
    if($maiorTrapezio->Area() < $trapezio->Area()){
        $maiorTrapezio = $trapezio;
    }
}

echo "\nO trapézio com a maior área é o de dimensões".$maiorTrapezio;
