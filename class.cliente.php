<?php
include_once"class.pessoa.php";
class Cliente extends Pessoa {  //Herança da classe Pessoa
    protected string $endereco;
    protected array $listaPacientes = []; // Agregação com a classe Paciente ("um" cliente para "um ou muitos" pacientes).
    protected int $cpf;

    public function __construct(string $rg,string $nomeCompleto,int $telefoneContato,string $email, int $cpf,string $endereco) {
        parent::__construct($rg,$nomeCompleto,$telefoneContato,$email);
        $this->endereco = $endereco;
        $this->cpf = $cpf;
    }

    public function getEndereco(): string {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): void {
        $this->endereco = $endereco;
    }

    public function getCpf(): int {
        return $this->cpf;
    }

    public function setCpf(int $cpf): void {
        $this->cpf = $cpf;
    }

    public function adicionarPaciente(Paciente $paciente): void {
        $this->listaPacientes[] = $paciente;
    }
    
    public function getListaPacientes(): array {
        return $this->listaPacientes;
    }
}

?>
