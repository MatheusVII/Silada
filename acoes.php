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
    
?>
