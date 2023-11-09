<?php
include_once"class.procedimento.php";
Class ProcedimentoEscolhido extends Procedimento{
   protected $procedimentoEscolhido =array();

 public function __construct() {}

 public function adicionarProcedimento(Procedimento $procedimento){
   $this->procedimentoEscolhido[]= $procedimento;
 }

 public function getProcedimentoEscolhido():array{
   return $this->procedimentoEscolhido;
 }

 public function getProcedimentos(){
  foreach($this->procedimentoEscolhido as $procedimento){
    return $procedimento->getNomeProcedimento();
 }



}
}

?>