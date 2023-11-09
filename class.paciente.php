<?php
include_once"class.pessoa.php";
class Paciente extends Pessoa {
  private dateTime $dataNascimento;
  private Cliente $responsavelFinanceiro;

  public function __construct (string $rg,string $nomeCompleto,int $telefoneContato,string $email,DateTime $dataNascimento, Cliente $responsavelFinanceiro){
    parent:: __construct($rg,$nomeCompleto,$telefoneContato,$email);
    $this->dataNascimento = $dataNascimento;
    $this->responsavelFinanceiro = $responsavelFinanceiro;
  }
  public function setDataNascimento($dataNascimento):void{
    $this->dataNascimento = $dataNascimento;
  }

  public function setResponsavelFinanceiro(Cliente $responsavelFinanceiro):void{
    $this->responsavelFinanceiro = $responsavelFinanceiro;
  }

  public function getDataNascimento(): DateTime {
    return $this->dataNascimento;
  }

  public function getResponsavelFinanceiro(){
    return $this->responsavelFinanceiro;
  }

  public function adicionarResponsavel(Cliente $responsavelFinanceiro){
    $this->responsavelFinanceiro->adicionarPaciente($this);
  }
}