<?php

class Compra
{
    private $idcompra;
    private $fornecedor;
    private $funcionario;
    private $data;
    private $valor;
    private $aberta;

    public function __construct($idcompra, $fornecedor,$funcionario, $data, $valor, $aberta) {
        $this->idcompra = $idcompra;
        $this->fornecedor = $fornecedor;
        $this->funcionario = $funcionario;
        $this->data = $data;
        $this->valor = $valor;
        $this->aberta = $aberta;
    }
 
    public function getidCompra() {
        return $this->idcompra;
    }

    public function setidCompra($idcompra): self {
        $this->idcompra = $idcompra;
        return $this;
    }

    public function getFornecedor() {
        return $this->fornecedor;
    }

    public function setFornecedor($fornecedor): self {
        $this->fornecedor = $fornecedor;
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