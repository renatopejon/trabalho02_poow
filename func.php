<?php
    require_once "conn.php";

    function inserirConsulta(
        PDO $conexao, string $nome, string $cpf, 
        string $email, string $telefone, string $dataconsulta, string $horario ):void {

        $sql = "INSERT INTO consultas(
            nome, cpf, email, telefone, dataconsulta, horario
        ) VALUES(
            :nome, :cpf, :email, :telefone, :dataconsulta, :horario
        )";    

        try {
            $consulta = $conexao->prepare($sql);
            $consulta->bindValue(":nome", $nome, PDO::PARAM_STR);
            $consulta->bindValue(":cpf", $cpf, PDO::PARAM_STR);
            $consulta->bindValue(":email", $email, PDO::PARAM_STR);
            $consulta->bindValue(":dataconsulta", $dataconsulta, PDO::PARAM_STR);
            $consulta->bindValue(":telefone", $telefone, PDO::PARAM_STR);
            $consulta->bindValue(":horario", $horario, PDO::PARAM_STR);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro ao inserir: ".$erro->getMessage());
        }
        echo '<script>alert("dasdsa")</script>';
        #header('location: #schedule');
    }

    function lerConsultas(PDO $conexao):array {
        $sql = "SELECT * FROM consultas;";
    
        try {
            $consulta = $conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro ao carregar lista consultas: ".$erro->getMessage());
        }
        
        return $resultado;
    }
?>