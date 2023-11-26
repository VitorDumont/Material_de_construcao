<?php
class DAOCargo
{
    public function listaTodos()
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM cargo;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Cargo $cargo)
    {
        $sql = 'INSERT INTO cargo (descricao) VALUES (?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $cargo->getDescricao());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui($id)
    {
        $sql = 'DELETE FROM cargo WHERE idcargo = ?;';
        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(Cargo $cargo)
    {
        $sql = 'UPDATE cargo SET descricao = ? WHERE idcargo = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $cargo->getDescricao());
        $pst->bindValue(2, $cargo->getIdcargo());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
