<?php

class Escola {
    private $nome;
    private $endereco;
    private $qtdAlunos;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome): self{
        $this->nome = $nome;

        return $this;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco): self{
        $this->endereco = $endereco;

        return $this;
    }

    public function getQtdAlunos(){
        return $this->qtdAlunos;
    }

    public function setQtdAlunos($qtdAlunos): self{
        $this->qtdAlunos = $qtdAlunos;

        return $this;
    }

    public function __toString(){
        return "\nO nome dessa escola é: ".$this->nome."\nO endereço dela é: ".$this->endereco."\nE a quantidade de alunos é: ".$this->qtdAlunos."\n";
    }

    public function maiorAlunos(){
        echo "\nA escola ".$this->nome."é a com maior quantidade de alunos, com as seguintes informações: ";
        echo $this->__toString();
    }
}

$escolas = array();

for ($i=0; $i < 4; $i++) { 
    $escola = new Escola();

    $escola->setNome(readline("Quale é o nome dessa escola?"));
    $escola->setEndereco(readline("Qual é o endereço dessa escola?"));
    $escola->setQtdAlunos(readline("E quantos alunos tem essa escola?"));
    echo "\n";

    array_push($escolas, $escola);
}

foreach ($escolas as $escola){
    echo $escola;
}

/*if ($escolas[0]->getQtdAlunos() > $escolas[1]->getQtdAlunos() and $escolas[0]->getQtdAlunos() > $escolas[2]->getQtdAlunos() and $escolas[0]->getQtdAlunos() > $escolas[3]->getQtdAlunos()){

    $escolas[0]->maiorAlunos();

} else if($escolas[1]->getQtdAlunos() > $escolas[2]->getQtdAlunos() and $escolas[1]->getQtdAlunos() > $escolas[3]->getQtdAlunos()){
    
    $escolas[1]->maiorAlunos();

} else if($escolas[2]->getQtdAlunos() > $escolas[3]->getQtdAlunos()){

    $escolas[2]->maiorAlunos();

}else{

    $escolas[3]->maiorAlunos();

}*/

$escolaMaisAluno  = $escolas[0];

foreach ($escolas as $escola){
    if ($escola->getQtdAlunos() > $escolaMaisAluno->getQtdAlunos()){
        $escolaMaisAluno = $escola;
    }
}

echo $escolaMaisAlunos->maiorAlunos;
