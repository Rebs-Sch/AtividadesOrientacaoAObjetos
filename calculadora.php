<?php

class Calculadora{
    private $num1;
    private $num2;

    public function getNum1(){
        return $this->num1;
    }

    public function setNum1($num1): self{
        $this->num1 = $num1;

        return $this;
    }

    public function getNum2(){
        return $this->num2;
    }

    public function setNum2($num2): self{
        $this->num2 = $num2;

        return $this;
    }

    public function soma($num1, $num2){
        return "A soma é: ".$num1+$num2."\n";
    }

    public function subtracao($num1, $num2){
        return "A subtração é: ".$num1-$num2."\n";
    }

    public function multiplicacao($num1, $num2){
        return "A multiplicação é: ".$num1*$num2."\n";
    }

    public function divisao($num1, $num2){
        return "A divisão é: ".$num1/$num2."\n";
    }

    public function modulo($num1, $num2){
        return "O módulo é: ".$num1%$num2."\n";
    }
}

$calculadora = new Calculadora;

$calculadora->setNum1(readline("Digite o primeiro número: "));
$calculadora->setNum2(readline("Digite o segundo número: "));

print soma($calculadora->getNum1(),$calculadora->getNum2());