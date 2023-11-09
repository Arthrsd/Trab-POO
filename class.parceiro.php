<?php

class Parceiro extends Dentista {  //Herança da classe Dentista
    protected float $valorRecebido;

    public function __construct(string $nomeCompleto, string $rg, string $email, int $telefone, string $endereco, string $cro, float $valorRecebido) {
        parent::__construct($nomeCompleto, $rg, $email, $telefone, $endereco, $cro);
        $this->valorRecebido = $valorRecebido;
    }

    public function getValorRecebido(): float {
        return $this->valorRecebido;
    }

    public function setValorRecebido(float $valorRecebido): void {
        $this->valorRecebido = $valorRecebido;
    }
}

?>
