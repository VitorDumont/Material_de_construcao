<?php
class Funcionario
{
    private $idfuncionario;
    private $nome;
    private $email;
    private $senha;
    private $endereco;
    private $contato;
    private $cpf;
    private $salario;
    private $cargo;

    public function __construct($idfuncionario, $nome, $email, $senha, $endereco, $contato, $cpf, $salario, $cargo) {
        $this->idfuncionario = $idfuncionario;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->endereco = $endereco;
        $this->contato = $contato;
        $this->cpf = $cpf;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    public function getIdfuncionario() {
        return $this->idfuncionario;
    }

    public function setIdfuncionario($idfuncionario) {
        $this->idfuncionario = $idfuncionario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
        return $this;
    }
    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
        return $this;
    }

    public function getContato() {
        return $this->contato;
    }

    public function setContato($contato) {
        $this->contato = $contato;
        return $this;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
        return $this;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
        return $this;
    }
}
