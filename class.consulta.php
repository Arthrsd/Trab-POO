<?php
class Consulta{
  private Paciente $paciente;
  private DateTime $dataConsulta;
  private DateTime $horarioConsulta;
  private ProcedimentoEscolhido $procedimento;

  public function __construct(Paciente $paciente, DateTime $dataConsulta, DateTime $horarioConsulta, ProcedimentoEscolhido $procedimento){
    $this->paciente = $paciente;
    $this->dataConsulta = $dataConsulta;
    $this->horarioConsulta = $horarioConsulta;
    $this->procedimento = $procedimento;
  }
 
  
  
}

?>