<?php

class Pessoa {
    private $nome;
    private $sobrenome;
    private $idade;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome): self{
        $this->nome = $nome;

        return $this;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome): self{
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade): self{
        $this->idade = $idade;

        return $this;
    }

    function __toString(){
        return "O nome da pessoa é: ".$this->nome."\nSeu sobrenome é: ".$this->sobrenome."\nE sua idade é: ".$this->idade;
    }
}

$pessoas = array();

do{
    echo"\n=====Menu=====\n1 - Cadastrar\n2 - Listar\n3 - Excluir um cadastro\n0 - Sair\n";

    $escolha = readline();

    switch($escolha){
        default:
            echo"Valor inválido\n";
            break;
        
        case 1:
            $pessoa = new Pessoa;
            $pessoa->setNome(readline("Qual é o nome dessa pessoa? "));
            $pessoa->setSobrenome(readline("Qual é o sobrenome? "));
            $pessoa->setIdade(readline("E qual é a idade? "));

            array_push($pessoas, $pessoa);

            break;

        case 2:
            foreach($pessoas as $pessoa){
                echo "\n".$pessoa."\n";
            }

            break;

        case 3:
            for ($i=0; $i < count($pessoas); $i++){
                echo "\n".$i." - ".$pessoas[$i]->getNome()." ".$pessoas[$i]->getSobrenome();
            }//sim, talvez fosse melhor usar um foreach, mas eu queria que fosse mostrado a posição da pessoa para ser deletado corretamente, e para isso o For se mostrou mais eficiente. Tentei insistir no Foreach, mas não estava legal.

            echo "\n";
            $escolhaItem = readline("Digite o número da pessoa que deseja excluir: ");
            array_splice($pessoas, $escolhaItem, 1);
            
            break;

        case 0:
            die;
    }
}while($escolha =!0);
