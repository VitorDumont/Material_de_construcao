<?php
class ItemVenda 
{
    private $iditemvenda;
    private $Venda;
    private $Produto;
    private $quantidade;
    private $preco;

    public function __construct($iditemvenda, $Venda, $Produto, $quantidade, $preco) {
        $this->iditemvenda = $iditemvenda;
        $this->Venda = $Venda;
        $this->Produto = $Produto;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
    }

    public function getIditemvenda() {
        return $this->iditemvenda;
    }

    public function setIditemvenda($iditemvenda): self {
        $this->iditemvenda = $iditemvenda;
        return $this;
    }

    public function getVenda() {
        return $this->Venda;
    }

    public function setVenda($Venda): self {
        $this->Venda = $Venda;
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
