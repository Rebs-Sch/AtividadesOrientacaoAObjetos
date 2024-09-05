<?php

class Posto{
    private int $litrosGasolina;
    private $abastecimentosGasolina = array();
    
    public function getAbastecimentosGasolina(){
        return $this->abastecimentosGasolina;
    }

    public function __construct(){
        $this->litrosGasolina = 0;
        $this->abastecimentosGasolina = 0;
    }

    public function abastecerGasolina($litros){
        
        if($litros<=$this->litrosGasolina){    
            $this->litrosGasolina -= $litros;
            
            echo "Abastecido com sucesso.\n";
            
            array_push($this->abastecimentosGasolina, $litros);
            return true;
        }else{
            echo "Não foi possível abastecer. Quantidade de gasolina disponível: ".$this->litrosGasolina;
            return false;
        }
    }
    
    public function reporEstoque($litros){
        $this->litrosGasolina += $litros;
    }
    
}

$posto = new Posto();

do{

    echo "===========Menu===========\n1 - Abastecer\n2 - Repor Estoque\n3 - Listar abastecimentos\n0 - Sair";
    $escolha = readline("");

    switch($escolha){

        default: 
        echo "Opção inválida. Por favor, tente novamente.\n";
        break;

        case 1:

        case 2:

        case 3:

        case 0:
    }


}while($escolha != 0);

for ($i=0; $i < count($posto->getAbastecimentosGasolina()); $i++){
    echo "\nAbastecimento ".$i." - ".$posto->getAbastecimentosGasolina()[$i]." litros";
}