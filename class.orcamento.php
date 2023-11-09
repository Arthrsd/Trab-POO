<?php
include_once"class.procedimento.php";
include_once"class.procedimentoEscolhido.php";
include_once"class.dentista.php";
include_once"class.tratamento.php";

class Orcamento{
    private Paciente $paciente;
    private Dentista $dentistaResponsavel;
    private DateTime $data;
    private ProcedimentoEscolhido $procedimento;
    private float $valorTotal;
    private bool $status;
    private float $formaPagamento;



  public function calcularOrcamento(){
    $this->valorTotal=0;
    foreach($this->procedimento->getProcedimentoEscolhido() as &$procedimento)
      $this->valorTotal+=$procedimento->getValorUnitario();
    return $this->valorTotal;
  }
  public function __construct(Paciente $paciente,Dentista $dentistaResponsavel,DateTime $data,ProcedimentoEscolhido $procedimento){
        $this->paciente=$paciente;
        $this->dentistaResponsavel=$dentistaResponsavel;
        $this->data=$data;
        $this->procedimento=$procedimento;
        $this->valorTotal=$this->calcularOrcamento();
    }
  public function setPaciente(Paciente $paciente){
    $this->paciente= $paciente;
  }
  
  public function getPaciente(){
    return $this->paciente;
  }

  public function setDentistaReponsavel(Dentista $dentistaResponsavel){
    $this->dentistaResponsavel=$dentistaResponsavel;
  }

  public function getDentistaResponsavel(){
    return $this->dentistaResponsavel;
  }

  public function setData(DateTime $data){
    $this->data=$data;
  }

  public function getData(){
    return $this->data;
  }

  public function setProcedimento(ProcedimentoEscolhido $procedimento){
    $this->procedimento=$procedimento;
  }

  public function getProcedimento(){
    return $this->procedimento;
  }
  
  public function setValorTotal(float $valorTotal){
    $this->valorTotal=$valorTotal;
  }

  public function getValorTotal(){
    return $this->valorTotal;
  }

  function adicionarProcedimentoEscolhido(ProcedimentoEscolhido $procedimento){
    $this->procedimento=$procedimento;
    $this->calcularOrcamento();
  }

  function aprovarOrcamento(){
   
  return $tratamento = new Tratamento($this->paciente,$this->dentistaResponsavel,$this->data,$this->procedimento);
  }
  function pagarOrcamento(){
  $this->calcularOrcamento();
  
    
  }
  
}
?>