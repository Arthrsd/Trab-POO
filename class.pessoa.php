<?php
abstract class Pessoa{
    protected string $rg;
    protected string $nomeCompleto;
    protected int $telefone;
    protected string $email;
    

    public function __construct(string $rg,string $nomeCompleto,int $telefoneContato,string $email){
      $this->rg =$rg;
      $this->nomeCompleto =$nomeCompleto;
      $this->telefone =$telefoneContato;
      $this->email= $email;
    }


    public function setRg($rg){
      $this->rg= $rg;
    }


    public function getRg():string{
      return $this->rg;
    }
    
    public function setNomeCompleto($nomeCompleto):void{
        $this->nomeCompleto=$nomeCompleto;
    }
    public function getNomeCompleto(){
        return $this->nomeCompleto;
    }

  }