<?php
class DaoFuncionario
{
    public function listaTodos()
    {
        $lista = [];
        $sql = 'SELECT f.idfuncionario, f.nome, f.email, f.senha, f.endereço, f.contato, f.cpf, f.salario, c.descricao AS cargo_descricao
                FROM funcionario f
                INNER JOIN cargo c ON f.cargo = c.idcargo;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function procuraUm($idfuncionario)
    {
        $lista = [];
        $sql = 'select * from funcionario where idfuncionario = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $idfuncionario);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Funcionario $funcionario)
    {
        $sql = 'INSERT INTO funcionario (nome, email, senha, endereço, contato, cpf, salario, cargo)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $funcionario->getNome());
        $pst->bindValue(2, $funcionario->getEmail());
        $pst->bindValue(3, $funcionario->getSenha());
        $pst->bindValue(4, $funcionario->getEndereco());
        $pst->bindValue(5, $funcionario->getContato());
        $pst->bindValue(6, $funcionario->getCpf());
        $pst->bindValue(7, $funcionario->getSalario());
        $pst->bindValue(8, $funcionario->getCargo());
        
        if ($pst->execute()) {
            $retorno = Conexao::getConexao()->lastInsertId();
            return $retorno;
        } else {
            return false;
        }
    }

    public function exclui($idfuncionario)
    {
        $sql = 'DELETE FROM funcionario WHERE idfuncionario = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $idfuncionario);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(Funcionario $funcionario)
    {
        $sql = 'UPDATE funcionario SET nome = ?, email = ?, senha = ?, endereço = ?, contato = ?, cpf = ?, salario = ?, cargo = ? 
                WHERE idfuncionario = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $funcionario->getNome());
        $pst->bindValue(2, $funcionario->getEmail());
        $pst->bindValue(3, $funcionario->getSenha());
        $pst->bindValue(4, $funcionario->getEndereco());
        $pst->bindValue(5, $funcionario->getContato());
        $pst->bindValue(6, $funcionario->getCpf());
        $pst->bindValue(7, $funcionario->getSalario());
        $pst->bindValue(8, $funcionario->getCargo());
        $pst->bindValue(9, $funcionario->getIdfuncionario());
        
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
