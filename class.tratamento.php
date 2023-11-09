<?php
include_once"class.orcamento.php";
include_once "class.especialidade.php";
class Tratamento extends Orcamento{
    public function realizarProcedimento(ProcedimentoEscolhido $procedimento){
        foreach($this->procedimento->getProcedimentoEscolhido()  as $value) 
          if($this->getDentistaResponsavel()->getEspecialidade()->getProcedimento()== $value)
           return  "Procedimento: ".$value->getNomeProcedimento()." realizado por ".$this->getDentistaResponsavel()->getNomeCompleto();          
         
         }
   
}