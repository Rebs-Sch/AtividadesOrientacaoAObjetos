<?php

require_once("Prato.php");

class Pedido{
    private string $nomeCliente;
    private string $nomeGarcom;
    private Prato $prato;

    public function __toString(){
        return "| Nome do Cliente: ".$this->nomeCliente." | Nome do Garçom: ".$this->nomeGarcom." | Prato: ".$this->prato->getNome()." |\n";
    }

    public function firula(){
        return "O cliente ".$this->nomeCliente." foi atendido pelo garçom ".$this->nomeGarcom.", e pediu um prato de ".$this->prato->getNome()." no valor de R$".$this->prato->getValor()."\n";
    }

    /**
     * Get the value of nomeCliente
     */
    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    /**
     * Set the value of nomeCliente
     */
    public function setNomeCliente(string $nomeCliente): self
    {
        $this->nomeCliente = $nomeCliente;

        return $this;
    }

    /**
     * Get the value of nomeGarcom
     */
    public function getNomeGarcom(): string
    {
        return $this->nomeGarcom;
    }

    /**
     * Set the value of nomeGarcom
     */
    public function setNomeGarcom(string $nomeGarcom): self
    {
        $this->nomeGarcom = $nomeGarcom;

        return $this;
    }

    /**
     * Get the value of prato
     */
    public function getPrato(): Prato
    {
        return $this->prato;
    }

    /**
     * Set the value of prato
     */
    public function setPrato(Prato $prato): self
    {
        $this->prato = $prato;

        return $this;
    }
}
