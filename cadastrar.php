<?php
include_once("class.dentista.php");
Class Cadastrar{
private dentista $dentista;
private Procedimento $procedimento;
private especialidade $especialidade;
public function __construct(){}
public function cadastrar(Dentista $dentista){
    $this->dentista = $dentista;
    $doc = fopen("cadastro.txt","a");
  fwrite($doc,"".$this->dentista->__toString()."\n");
  fclose($doc);
}


public function cadastrarProcedimento($procedimento){
   $this->procedimento = $procedimento;
   $doc = fopen("procedimentos.txt","a");
   fwrite($doc,"".$this->procedimento->__toString());
}

}

?>