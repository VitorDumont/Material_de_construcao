<?php
class ItemCompra
{
    private $iditemcompra;
    private $Compra;
    private $Produto;
    private $quantidade;
    private $preco;

    public function __construct($iditemcompra, $Compra, $Produto, $quantidade, $preco) {
        $this->iditemcompra = $iditemcompra;
        $this->Compra = $Compra;
        $this->Produto = $Produto;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
    }

    public function getIditemcompra() {
        return $this->iditemcompra;
    }

    public function setIditemcompra($iditemcompra): self {
        $this->iditemcompra = $iditemcompra;
        return $this;
    }

    public function getCompra() {
        return $this->Compra;
    }

    public function setCompra($Compra): self {
        $this->Compra = $Compra;
        return $this;
    }

    public function getProduto() {
        return $this->Produto;
    }

    public function setProduto($Produto): self {
        $this->Produto = $Produto;
        return $this;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade): self {
        $this->quantidade = $quantidade;
        return $this;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco): self {
        $this->preco = $preco;
        return $this;
    }
}
