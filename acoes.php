<?php
    session_start();
    require('conexao.php');

    if(isset($_POST['cadastrar'])){
        $cpf = mysqli_real_escape_string($conexao,trim($_POST['cpf']));
        $senha = mysqli_real_escape_string($conexao,trim($_POST['senha']));
        $tipo = mysqli_real_escape_string($conexao,trim($_POST['tipo']));

        $sql = "INSERT INTO usuarios (cpf, senha, tipo) VALUES ('$cpf', '$senha', '$tipo')";
        mysqli_query($conexao, $sql);
        header('Location: cadastro.php');
    }

    if(isset($_POST['confirmar_requisicao'])){
        $id = mysqli_real_escape_string($conexao,($_POST['id_aluno']));
        $sql = "UPDATE requisicoes SET status = 'confirmado' WHERE id = '$id'";
        mysqli_query($conexao, $sql);
        header('Location: pendentes.php');
    }

    if(isset($_POST['enviar'])){
        $just = mysqli_real_escape_string($conexao,($_POST['justificativa']));
        $id = mysqli_real_escape_string($conexao,($_POST['id_aluno']));
        $sql = "UPDATE requisicoes SET status = 'recusado', justificativa = '$just' WHERE id = '$id'";
        mysqli_query($conexao, $sql);
        header('Location: pendentes.php');
    }
?>
