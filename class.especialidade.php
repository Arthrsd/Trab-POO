<?php
include_once"class.procedimento.php";
include_once"class.dentista.php";
class Especialidade{
    private string $descricaoEspecialidade;
    private string $nomeEspecialidade;
    private Procedimento $procedimento;
    
    public function __construct(string $descricaoEspecialidade, string $nomeEspecialidade,Procedimento $procedimento){
        $this->descricaoEspecialidade=$descricaoEspecialidade;
        $this->nomeEspecialidade=$nomeEspecialidade;
        $this->procedimento=$procedimento;
    }

    public function getDescricaoEspecialidade(){
        return $this->descricaoEspecialidade;
}
    public function getNomeEspecialidade(){
        return $this->nomeEspecialidade;
    }

    public function setDescricaoEspecialidade(string $descricaoEspecialidade){
        $this->descricaoEspecialidade=$descricaoEspecialidade;
    }

    public function setNomeEspecialidade(string $nomeEspecialidade){
        $this->nomeEspecialidade=$nomeEspecialidade;
    }

    public function getProcedimento(){
        return $this->procedimento;
    }

    public function setProcedimento(Procedimento $procedimento){
        $this->procedimento=$procedimento;
    }
    
    public function validaProcedimento(Procedimento $procedimento){
        $this->procedimento=$procedimento;
        if($this->getProcedimento()==$procedimento);

    }
    public function __toString(){
        return $this->descricaoEspecialidade." ". $this->nomeEspecialidade." ". $this->procedimento->getNomeProcedimento();
    }
}