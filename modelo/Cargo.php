<?php
class Cargo
{
    private $idcargo;
    private $descricao;

    public function __construct($descricao, $idcargo = null)
    {
        $this->descricao = $descricao;
        $this->idcargo = $idcargo;
    }

    public function getIdcargo()
    {
        return $this->idcargo;
    }

    public function setIdcargo($idcargo)
    {
        $this->idcargo = $idcargo;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
}
