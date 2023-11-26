<?php
class DaoItemCompra
{
    public function listaPorCompra($compra)
    {
        $lista = [];
        $sql = 'SELECT iditemcompra, Compra, Produto, quantidade, preco, quantidade*preco AS subtotal FROM itemcompra WHERE Compra = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $compra);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
    
    public function inclui(ItemCompra $itemCompra)
    {
        $sql = 'INSERT INTO itemcompra (Compra, Produto, quantidade, preco) VALUES (?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $itemCompra->getCompra());
        $pst->bindValue(2, $itemCompra->getProduto());
        $pst->bindValue(3, $itemCompra->getQuantidade());
        $pst->bindValue(4, $itemCompra->getPreco());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Você pode implementar mais métodos aqui, conforme necessário.
}
?>
