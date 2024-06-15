<?php
require_once "php/conecta.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animation.css">
    <script src="js/form.js"></script>
</head>

<body>
    <?= include 'nav.html'; ?>

    <h1 class="titulo">Cadastre-se</h1>
    <main class="contato">
        <div class="area-do-formulario">
            <div class="introducao">
            </div>

            <form class="formulario" method="POST" action="php/usuario.php">
                <div class="area-nome-completo">
                    Nome:<input type="text" name="nome" id="nome" placeholder="Nome" class="area info" required>
                    Sobrenome:<input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" class="area info">
                </div>

                Email:<input type="text" name="email" id="email" placeholder="Email" class="info" required>

                Endereço: <input type="text" name="endereco" id="endereco" placeholder="Endereço">

                Senha: <input type="password" name="senha" id="senha" placeholder="Senha">
                Confirmar Senha: <input type="password" name="confirmar_senha" id="confirmar-senha" placeholder="Confirmar Senha">
                <br>

                <div class="data">
                    Data de Nascimento: <br>
                    Dia: <select class="dia" name="dia" id="dia"></select>
                    Mês: <select class="mes" name="mes" id="mes"></select>
                    Ano: <select class="ano" name="ano" id="ano"></select>
                </div>

                <div class="area-botao">
                    <input type="submit" value="Cadastre-se" placeholder="enviar" class="btn">
                </div>
                <p>Já tem cadastro? <a href="login.php">Fazer login</a></p>
                <div class="termos">
                    <p>Ao clicar em Cadastre-se, você concorda com nossos Termos, <strong><a href="#">Política de Privacidade</a></strong> e <strong><a href="#">Política de Cookies</a></strong>. Você poderá receber notificações por SMS e cancelar isso quando quiser.</p>
                </div>
            </form>
    </main>

    <script>
        function prencherData() {
            var dia = document.getElementById('dia');
            var mes = document.getElementById('mes');
            var ano = document.getElementById('ano');

            for (var i = 1; i <= 31; i++) {
                var option = document.createElement('option');
                option.text = i;
                option.value = i;
                dia.add(option);
            }
            var meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
            var mesNumber = meses.map(function(elemento, indice) {
                return indice + 1;
            });
            for (i = 0; i < mesNumber.length; i++) {
                var option = document.createElement('option');
                option.text = mesNumber[i];
                option.value = i + 1;
                mes.add(option);
            }
            var anoAtual = new Date().getFullYear();
            var anofim = 2024

            for (var i = anoAtual; i >= 1904; i--) {
                var option = document.createElement('option');
                option.text = i;
                option.value = i;
                ano.add(option);
            }
        }
        window.onload = prencherData()
    </script>
</body>

</html>