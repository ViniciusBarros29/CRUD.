<?php

    include_once "conf/default.inc.php";
    require_once "conf/Conexao.php";
    
    $pdo = Conexao::getInstance();

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $_POST['acao'];

    if ($acao == 'excluir'){
        $stmt = $pdo->prepare('DELETE FROM candidato WHERE nome = :id');
        $stmt->bindParam(':id', $id);
        $id = $_GET['id'];
        $stmt->execute();
        header('location:candidatos.php');
    }

    if ($acao == 'salvar'){
        $stmt = $pdo->prepare('INSERT INTO candidato (nome) VALUES(:nome)');
        $stmt->bindParam(':nome', $descricao, PDO::PARAM_STR);
        $descricao = $_POST['descricao'];
        $stmt->execute();
        header("location:candidatos.php");
    }
?>

