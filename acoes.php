<?php
    session_start();
    require('conexao.php');

    // Botão do arquivo de login.php
    if (isset($_POST['login'])) {
        $cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
        $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

        // Verifica na tabela moderador
        $sqlModerador = "SELECT * FROM moderador WHERE cpf = '$cpf' AND senha = '$senha'";
        $resultModerador = mysqli_query($conexao, $sqlModerador);
        if (mysqli_num_rows($resultModerador) > 0) {
            $_SESSION['tipo'] = 'moderador';
            $_SESSION['cpf'] = $cpf;
            header('Location: pendentes.php'); // Redireciona para o painel do moderador
            exit();
        }

        // Verifica na tabela responsavel
        $sqlResponsavel = "SELECT * FROM responsavel WHERE cpf = '$cpf' AND senha = '$senha'";
        $resultResponsavel = mysqli_query($conexao, $sqlResponsavel);
        if (mysqli_num_rows($resultResponsavel) > 0) {
            $_SESSION['tipo'] = 'responsavel';
            $_SESSION['cpf'] = $cpf;
            header('Location: responsavel.php'); // Redireciona para o painel do responsável
            exit();
        }

        // Caso as credenciais estejam incorretas
        $_SESSION['login_erro'] = "CPF ou senha inválidos!";
        header('Location: cadastro.php'); // Redireciona para a página de login
        exit();
    }

    // Ação do moderador de confirmar uma requisição
    if (isset($_POST['confirmar_requisicao'])) {
        $id = mysqli_real_escape_string($conexao, ($_POST['id_aluno']));
        $sql = "UPDATE requisicoes SET status = 'confirmado' WHERE id = '$id'";
        mysqli_query($conexao, $sql);
        header('Location: pendentes.php');
    }
    
    // Botão do modal da justificativa
    if (isset($_POST['enviar'])) {
        $just = mysqli_real_escape_string($conexao, ($_POST['justificativa']));
        $id = mysqli_real_escape_string($conexao, ($_POST['id_aluno']));
        $sql = "UPDATE requisicoes SET status = 'recusado', justificativa = '$just' WHERE id = '$id'";
        mysqli_query($conexao, $sql);
        header('Location: pendentes.php');
    }
?>