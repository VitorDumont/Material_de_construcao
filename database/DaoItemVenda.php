<?php
class DaoItemVenda
{
    public function listaPorVenda($Venda)
    {
        $lista = [];
        $sql = 'select iditemvenda, Venda, Produto, quantidade, preco, quantidade*preco as subtotal from itemvenda where Venda = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $Venda);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
    
    public function inclui(ItemVenda $itemVenda)
    {
        $sql = 'insert into itemvenda (Venda, Produto, quantidade, preco) values (?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $itemVenda->getVenda());
        $pst->bindValue(2, $itemVenda->getProduto());
        $pst->bindValue(3, $itemVenda->getQuantidade());
        $pst->bindValue(4, $itemVenda->getPreco());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

}

