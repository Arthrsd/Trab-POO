<?php

class Administrativo extends Profissional {
    private $salario;

    public function __construct($nomeCompleto, $rg, $email, $telefoneContato, $cpf, $endereco, $salario) {
        parent::__construct($nomeCompleto, $rg, $email, $telefoneContato, $cpf, $endereco);
        $this->salario = $salario;
    }
}