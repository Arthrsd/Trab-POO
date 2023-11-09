<?php
include_once "class.procedimento.php";
include_once"class.profissional.php";
include_once"class.procedimentoEscolhido.php";
include_once"class.especialidade.php";
class Dentista extends Profissional {
    private string $cro;
    protected Especialidade $especialidade;
    protected ProcedimentoEscolhido $procedimento;

    public function __construct(string $rg,string $nomeCompleto,int $telefoneContato,string $email,string $endereco, int $cpf, string $cro, Especialidade $especialidade,ProcedimentoEscolhido $procedimento) {
        parent::__construct($rg,$nomeCompleto,$telefoneContato,$email,$endereco,$cpf);
        $this->cro = $cro;
        $this->especialidade = $especialidade;
        $this->procedimento=$procedimento;
    }

    public function getCro() {
        return $this->cro;
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function setCro(string $cro) {
        $this->cro = $cro;
    }

    public function setEspecialidade(Especialidade $especialidade) {
        $this->especialidade = $especialidade;
    }

    public function realizarProcedimento(ProcedimentoEscolhido $procedimento){
        foreach($this->procedimento->getProcedimentoEscolhido()  as $value) 
          if($this->especialidade->getProcedimento()== $value)
           return  "Procedimento: ".$value->getNomeProcedimento()." realizado por ".$this->getNomeCompleto();          
         
         }
    
    public function verficarEspecialidade(){
        
    }
   public function __toString() {
    return "Nome: ".$this->getNomeCompleto()."\nEspecialidade: " .$this->especialidade->getNomeEspecialidade()."\nCRO:".$this->getCro().
    "\nProcedimento: ".$this->procedimento->getProcedimentos()."";
   }

}