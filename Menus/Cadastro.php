<?php
require('../utilidades/autoload.php');
sessionador();
if (!empty($_POST)) {
    $sql = "";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $repetir = $_POST['repetir'];
    $teste = true;

    if ($nome != null and $email != null and $telefone != null and $cep != null and $cpf != null and ($senha == $repetir and $senha != null)) {
        foreach ($bd->query("SELECT email from `usuarios` where email = '$email'") as $row) {
            echo ('<script>alert("Entrada Invalida email ja cadastrado");</script>');
            $teste = false;
            header("Location:../", true);
        }
        if ($teste) {
            $sql = "INSERT into usuarios (nome,email,telefone,cep,cpf,senha)
        VALUES('$nome','$email','$telefone','$cep','$cpf','$senha')";
            $bd->query($sql);
            echo ('<script>alert("Cadastro concluido");</script>');
            header("Location:", true);
        }
    }
};
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
                    <input id="repetir" name="repetir" class="inputCadastro" type="password">
                </div>
            </div><br>
            <input id="enviar" class="inputEnviar" onsubmit="coletor()" type="submit" value="Enviar">
        </form>
    </div>
</body>
<script src="../utilidades/javascripts/cadastro.js"></script>

</html>