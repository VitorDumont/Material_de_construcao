<?php
class Produto
{
    private $idproduto;
    private $fornecedor;
    private $nome;
    private $estoque;
    private $preco;

	public function __construct($idproduto, $fornecedor, $nome,$estoque, $preco) {
		$this->idproduto = $idproduto;
		$this->fornecedor = $fornecedor;
		$this->nome = $nome;
        $this->estoque = $estoque;
		$this->preco = $preco;
	}

	public function getIdproduto()
	{
		return $this->idproduto;
    }
    
	public function setIdproduto($idproduto)
	{
		$this->idproduto = $idproduto;
	}

	public function getFornecedor()
	{
		return $this->fornecedor;
    }
    
	public function setFornecedor($fornecedor)
	{
		$this->fornecedor = $fornecedor;
	}

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }
    public function getEstoque() {
        return $this->estoque;
    }

    public function setEstoque($estoque) {
        $this->estoque = $estoque;
        return $this;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
        return $this;
    }
}
