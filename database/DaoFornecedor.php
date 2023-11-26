<?php

class DAOFornecedor
{
    public function listaTodos()
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM fornecedor;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

 

    public function inclui(Fornecedor $fornecedor)
    {
        $sql = 'INSERT INTO fornecedor (nome, endereço, contato, cnpj) VALUES (?, ?, ?, ?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $fornecedor->getNome());
        $pst->bindValue(2, $fornecedor->getEndereco());
        $pst->bindValue(3, $fornecedor->getContato());
        $pst->bindValue(4, $fornecedor->getCnpj());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui($id)
    {
        $sql = 'DELETE FROM fornecedor WHERE idfornecedor = ?;';
        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(Fornecedor $fornecedor)
    {
        $sql = 'UPDATE fornecedor SET nome = ?, endereço = ?, contato = ?, cnpj = ? WHERE idfornecedor = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $fornecedor->getNome());
        $pst->bindValue(2, $fornecedor->getEndereco());
        $pst->bindValue(3, $fornecedor->getContato());
        $pst->bindValue(4, $fornecedor->getCnpj());
        $pst->bindValue(5, $fornecedor->getIdfornecedor());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
