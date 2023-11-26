<?php
class DaoProduto
{
 /*   public function listaTodos()
    {
        $lista = [];
        $sql = 'select * from produto;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }*/

    public function listaTodos()
    {
        $lista = [];
        $sql = 'SELECT * FROM vw_produto_nome_fornecedor';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }


    public function listaQuase($fornecedor)
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('call este_fornecedor(?);');
        $pst->bindValue(1, $fornecedor);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    
    public function procuraUm($idproduto)
    {
        $lista = [];
        $sql = 'select * from produto where idproduto = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $idproduto);
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Produto $produto)
    {
        $sql = 'insert into produto (fornecedor, nome, estoque, preco) values (?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produto->getFornecedor());
        $pst->bindValue(2, $produto->getNome());
        $pst->bindValue(3, $produto->getEstoque());
        $pst->bindValue(4, $produto->getPreco());
        if ($pst->execute()) {
            $retorno = Conexao::getConexao()->lastInsertId();
            return $retorno;
        } else {
            return false;
        }
    }

    public function exclui($idproduto)
    {
        $sql = 'delete from produto where idproduto = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $idproduto);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(Produto $produto)
    {
        $sql = 'UPDATE produto SET fornecedor = ?, nome = ?, estoque = ?, preco = ?
                WHERE idproduto = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produto->getFornecedor());
        $pst->bindValue(2, $produto->getNome());
        $pst->bindValue(3, $produto->getEstoque());
        $pst->bindValue(4, $produto->getPreco());
        $pst->bindValue(5, $produto->getIdproduto());
        
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

