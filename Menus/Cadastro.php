<?php
require('../utilidades/conexao.php')
//if(isset($_POST[])){}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Cadastro</title>
</head>

<body>
    <div style="height: 3rem;">
        <nav>
            <a href="../"><img class="re" src="../utilidades/imgs/re.png" alt="Seta de Retorno"></a>
        </nav>
    </div>
    <div class="centralizado">
        <h1>Entre com seu Cadastro</h1>
    </div>
    <div class="centralizado" style="margin-top: 1rem;">
        <form id="form" class="formCadastro" method="post" autocomplete="off">
            <label class="labelCadastro" for="nome">Nome</label>
            <input id="nome" name="nome" class="inputCadastro" oninput="nomeFill()" type="text">
            <label class="labelCadastro" for="email">Email</label>
            <input id="email" name="email" class="inputCadastro" oninput="emailFill()" type="email">
            <label class="labelCadastro" for="telefone">Numero de telefone</label>
            <input id="telefone" name="telefone" class="inputCadastro" oninput="telefoneFill()" type="tel">
            <label class="labelCadastro" for="cep">Cep</label>
            <input id="cep" name="cep" class="inputCadastro" oninput="cepFill()" type="number">
            <label class="labelCadastro" for="cpf">CPF</label>
            <input id="cpf" name="cpf" class="inputCadastro" oninput="cpfFill()" type="number">
            <div class="divCadastro">
                <div class="divCadastro1"><label class="labelCadastro">Senha</label>
                    <input id="senha" name="senha" class="inputCadastro" oninput="senhaFill()" type="password">
                </div>
                <div class="divCadastro1">
                    <label class=" labelCadastro" for=""> Repita a senha</label>
                    <input id="repetir" class="inputCadastro" type="password">
                </div>
            </div><br>
            <input id="enviar" class="inputEnviar" type="submit" value="Enviar">
        </form>
    </div>
</body>
<script src="../utilidades/javascripts/cadastro.js"></script>

</html>