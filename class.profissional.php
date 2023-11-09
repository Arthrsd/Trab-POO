<?php
include_once"class.pessoa.php";
class Profissional extends Pessoa {
    protected string $endereco;
    protected int $cpf;

    public function __construct(string $rg,string $nomeCompleto,int $telefoneContato,string $email,string $endereco, int $cpf) {
        parent::__construct($rg,$nomeCompleto,$telefoneContato,$email);
        $this->endereco = $endereco;
        $this->cpf=$cpf;
    }
}
