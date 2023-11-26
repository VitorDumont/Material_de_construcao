<?php

class Fornecedor
{
    private $idfornecedor;

    private $nome;

    private $endereco;

    private $contato;

    private $cnpj;
    
    public function __construct($nome, $endereco, $contato, $cnpj, $idfornecedor = null)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->contato = $contato;
        $this->cnpj = $cnpj;
        $this->idfornecedor = $idfornecedor;
    }

    /**
     * @return mixed
     */
    public function getIdfornecedor()
    {
        return $this->idfornecedor;
    }

    /**
     * @param mixed $idfornecedor
     * @return self
     */
    public function setIdfornecedor($idfornecedor): self
    {
        $this->idfornecedor = $idfornecedor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return self
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     * @return self
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContato()
    {
        return $this->contato;
    }

    /**
     * @param mixed $contato
     * @return self
     */
    public function setContato($contato): self
    {
        $this->contato = $contato;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     * @return self
     */
    public function setCnpj($cnpj): self
    {
        $this->cnpj = $cnpj;
        return $this;
    }
}

?>
