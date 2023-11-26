<?php

class Cliente
{
    private $idcliente;

    private $nome;

    private $endereco;

    private $contato;

    private $cpf;
    
    public function __construct($nome, $endereco, $contato, $cpf, $idcliente = null)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->contato = $contato;
        $this->cpf = $cpf;
        $this->idcliente = $idcliente;
    }

    /**
     * @return mixed
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * @param mixed $idcliente
     * @return self
     */
    public function setIdcliente($idcliente): self
    {
        $this->idcliente = $idcliente;
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
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     * @return self
     */
    public function setCpf($cpf): self
    {
        $this->cpf = $cpf;
        return $this;
    }
}
