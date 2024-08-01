<?php

//Eu não oconheco pokemon muito bem, pois, mesmo quando criança, não era algo que eu me interessava ou assistia. Graças a isso, é provável que algumas informações ou métodos não estejam 100% fiéis às características orinais.

class Pokemon{
    public $nome;
    public $peso;
    public $altura;
    public $tipo;
    public $ataque;
    public $vida;
    public $nivel;
    public $fraqueza;

    function __construct ($nm, $ps, $alt, $tp, $atq, $vd, $fq, $nv = 0){
        $this->nome = $nm;
        $this->peso = $ps;
        $this->altura = $alt;
        $this->tipo = $tp;
        $this->ataque = $atq;
        $this->vida = $vd;
        $this->fraqueza = $fq;
        $this->nivel = $nv;
    }

    function MostrarAtributos(){
        echo "\nO seu pokemon ".$this->nome." possui os seguintes atributos:
            \nNome = ".$this->nome.
            "\nPeso = ".$this->peso.
            "\nAltura = ".$this->altura.
            "\nTipo = ".$this->tipo.
            "\nAtaque = ".$this->ataque.
            "\nVida = ".$this->vida.
            "\nFraqueza = ".$this->fraqueza.
            "\nNivel = ".$this->nivel."\n";
    }
    function AumentarNivel(){
        $this->nivel++;
        $this->ataque += ($this->ataque/5)*$this->nivel;
        $this->vida += ($this->vida/5)*$this->nivel;
        echo "Você aumentou o nível de seu pokémon em 1.\n
        Agora, ele tem ".$this->vida." de vida\n
        e ".$this->ataque." de ataque.";
    }
    function Atacar (){
        $dano = ($this->ataque/3)*rand(1,3);

        if($this->vida > 0){
            echo "Seu pokemon ataca, causando um total de ".$dano." de dano.\n";
        }else{
            echo "Seu pokemon morreu e ele não pode batalhar\n";
        }
    }
    function Defender(){
        $dano = rand (20,50);
        
        if($this->vida > 0){
            $this->vida -= $dano;
            echo "Seu pokemon recebeu um dano equivalente a ".$dano.". Sua vida agora é igual a ".$this->vida."\n";
        }else{
            echo "Infelizmente, seu pokemon morreu. Pobre dele... :(";
        }
    }
    function Curar(){
        if($this->vida <= 0){
            $this->vida = rand(10,25);
            echo "Seu pokemon reviveu! :) Neste momento, sua vida é igual a: ".$this->vida;
        }else{
            $this->vida += rand(10,20);
            echo "Seu pokemon se curou, sua vida agora é igual a: ".$this->vida;
        }
    }
}

$pokemon1 = new Pokemon("Lunala",120,4,"Fantasma e Psiquico",113,137,0);
$pokemon2 = new Pokemon("Greavard",35,0.6,"Fantasma",61,50,0);

echo "==A seguir, os status de cada pokemon==";
$pokemon1->MostrarAtributos();
$pokemon2->MostrarAtributos();

echo "Você deseja testar qual pokemon?\n
1- Lunala\n
2- Grevard\n
0- Sair\n";
$esc = readline();

if ($esc == 1){
    echo "Você escolheu o pokemon Lunala!\n";
   
    do{
    echo "O que deseja fazer com ele?\n
        1- Atacar\n
        2- Defender\n
        3- Curar\n
        4- Voltar\n";
        $escA = readline();

        if ($escA == 1) {
            $pokemon1->Atacar();
        }elseif ($escA == 2){
            $pokemon1->Defender();
        }else if($escA == 3){
            $pokemon1->Curar();
        }else if ($escA == 4){
            $esc = 4;
        }
    }while($esc == 1);

}else if($esc == 2){
    echo "Você escolheu o pokemon Greavard!\n";

    do{
        echo"O que deseja fazer com ele?\n
        1- Atacar\n
        2- Defender\n
        3- Curar\n
        4- Voltar\n";
        $escA = readline();

        if ($escA == 1) {
            $pokemon2->Atacar();
        }elseif ($escA == 2){
            $pokemon2->Defender();
        }else if($escA == 3){
            $pokemon2->Curar();
        }else if ($escA == 4){
            $esc = 4;
        }
    }while($esc = 2);

}else if($esc == 4){
    echo "Você deseja testar qual pokemon?\n
    1- Lunala\n
    2- Grevard\n
    0- Sair";
    $esc = readline();
}else {
    die;
}