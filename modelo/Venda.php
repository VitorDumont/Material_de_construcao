<?php

class Venda
{
    private $idvenda;
    private $cliente;
    private $funcionario;
    private $data;
    private $valor;
    private $aberta;

    public function __construct($idvenda, $cliente,$funcionario, $data, $valor, $aberta) {
        $this->idvenda = $idvenda;
        $this->cliente = $cliente;
        $this->funcionario = $funcionario;
        $this->data = $data;
        $this->valor = $valor;
        $this->aberta = $aberta;
    }
 
    public function getIdVenda() {
        return $this->idvenda;
    }

    public function setIdVenda($idvenda): self {
        $this->idvenda = $idvenda;
        return $this;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function setCliente($cliente): self {
        $this->cliente = $cliente;
        return $this;
    }
    public function getFuncionario() {
        return $this->funcionario;
    }

    public function setFuncionario($funcionario): self {
        $this->funcionario = $funcionario;
        return $this;
    }


    public function getData() {
        return $this->data;
    }

    public function setData($data): self {
        $this->data = $data;
        return $this;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor): self {
        $this->valor = $valor;
        return $this;
    }

    public function getAberta() {
        return $this->aberta;
    }

    public function setAberta($aberta): self {
        $this->aberta = $aberta;
        return $this;
    }
}