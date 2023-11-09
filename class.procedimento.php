<?php
include_once"class.dentista.php";

class Procedimento{
  private string $nomeProcedimento;
  private string $descricaoProcedimento;
  protected float $valorUnitario;
  

  public function __construct(string $nomeProcedimento,string $descricaoProcedimento, float $valorUnitario){
    $this->nomeProcedimento=$nomeProcedimento;
    $this->descricaoProcedimento = $descricaoProcedimento;
    $this->valorUnitario =$valorUnitario;
  }

  public function setNomeProcedimento(string $nomeProcedimento){
    $this->nomeProcedimento=$nomeProcedimento;
  }

  public function getNomeProcedimento(){
    return $this->nomeProcedimento;
  }

  public function getDescricaoProcedimento(){
        return $this->descricaoProcedimento;
    }

  public function setDescricaoProcedimento(string $descricaoProcedimento){
        $this->descricaoProcedimento = $descricaoProcedimento;
    }

  public function getValorUnitario(){
        return $this->valorUnitario;
    }

  public function setValorUnitario(float $valorUnitario){
        $this->valorUnitario = $valorUnitario;
    }

  public function __toString(){
    return "Nome Do Procedimento: ". $this->getNomeProcedimento() ."\nDescrição: ".$this->getDescricaoProcedimento() .
    "\nValor unitário: ".$this->getValorUnitario();
  }
}

?>