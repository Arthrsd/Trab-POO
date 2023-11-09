<?php
include_once"class.procedimentoEscolhido.php";
include_once"class.dentista.php";
class CLT extends Dentista {
    // A CLT herda atributos de Dentista, incluindo CRO e especialidades
    private float $salario;

    public function __construct(string $rg,string $nomeCompleto,int $telefoneContato,string $email,string $endereco, int $cpf, $cro, Especialidade $especialidade,ProcedimentoEscolhido $procedimento) {
        parent::__construct($rg,$nomeCompleto,$telefoneContato,$email,$endereco, $cpf, $cro, $especialidade,$procedimento);
        $this->salario = $this->salarioFinal();
    }

  public function setSalario(float $salario){
    $this->salario=$salario;
  }

  public function getSalario(){
    return $this->salario;
  }

  function salarioFinal(){
    $this->salario=0;
    foreach($this->procedimento->getProcedimentoEscolhido() as &$procedimento)
      $this->salario+=0.6* $procedimento->getValorUnitario();
    return $this->salario;
  }
}