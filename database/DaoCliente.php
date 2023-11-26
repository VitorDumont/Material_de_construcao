<?php

class DAOCliente
{
    public function listaTodos()
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM cliente;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Cliente $cliente)
    {
        $sql = 'INSERT INTO cliente (nome, endereço, contato, cpf) VALUES (?, ?, ?, ?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $cliente->getNome());
        $pst->bindValue(2, $cliente->getEndereco());
        $pst->bindValue(3, $cliente->getContato());
        $pst->bindValue(4, $cliente->getCpf());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui($id)
    {
        $sql = 'CALL excluir_cliente(?);';
        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(Cliente $cliente)
    {
        $sql = 'UPDATE cliente SET nome = ?, endereço = ?, contato = ?, cpf = ? WHERE idcliente = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $cliente->getNome());
        $pst->bindValue(2, $cliente->getEndereco());
        $pst->bindValue(3, $cliente->getContato());
        $pst->bindValue(4, $cliente->getCpf());
        $pst->bindValue(5, $cliente->getIdcliente());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
