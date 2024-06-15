<?php
require "conecta.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $nomeCompleto = $nome . " " . $sobrenome;
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $dia= $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    $data_nascimento =$ano."-".$mes."-".$dia;
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];
    $nivel = 2;

    if ($senha === $confirmar_senha) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `usuarios`(`nome`, `email`, `endereco`, `senha`, `data_nascimento`, `nivel`) VALUES ('$nomeCompleto', '$email', '$endereco', '$senhaHash', '$data_nascimento', $nivel)";

        $query = mysqli_query($conexao, $sql);

        if ($query) {
            echo "Registro realizado com sucesso";
        } else {
            echo "Erro ao registrar usuário: " . mysqli_error($conexao);
        }
    } else {
        echo 'As senhas não correspondem.';
    }
}

$conexao->close();
