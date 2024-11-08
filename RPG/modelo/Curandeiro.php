<?php 

require_once("Mago.php");

class Curandeiro extends Mago{
    private int $forcaCura;

    public function __construct($n, $p, $fc){
        $this->nome = $n;
        $this->poder = $p;
        $this->forcaCura = $fc;
    }
    public function lancarPoder(){
        return "\nO mago ".$this->nome.", do tipo Curandeiro, possui uma força de ".$this->forcaCura." e lançou o poder de ".$this->poder->getDescricao()." com a força total de ".$this->poder->getForcaTotal($this->forcaCura)."\n";
    }
}