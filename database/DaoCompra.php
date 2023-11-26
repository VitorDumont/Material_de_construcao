<?php
class DaoCompra 
{
    public function listaTodos()
    {
        $lista = [];
        $sql = 'SELECT * FROM vw_fornecedor_compra';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function abrirCompra(Compra $compra)
    {
        $sql = 'INSERT INTO compra (fornecedor, funcionario, valor) VALUES (?, ?, ?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $compra->getFornecedor());
        $pst->bindValue(2, $compra->getFuncionario());
        $pst->bindValue(3, $compra->getValor());
        if ($pst->execute()) {
            $retorno = Conexao::getConexao()->lastInsertId();
            return $retorno;
        } else {
            return false;
        }
    }


    public function fecharCompra($idcompra)
    {
        $sql = 'UPDATE compra SET aberta = 0 WHERE idcompra = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $idcompra);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Se necessário, você pode implementar mais métodos aqui, como inclusão de itens na compra.
}
?>
