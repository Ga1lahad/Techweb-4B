<?php
require('../utilidades/conexao.php');
session_start();
if (!empty($_POST)) {
    $sql = "";
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    if ($login != null and $pass != null) {
        $sql = "SELECT email,nome FROM usuarios WHERE email = '$login' AND senha ='$pass';";
    }
    try {
        $rows = $bd->query($sql);
        foreach ($rows as $row) {
            $_SESSION["Email"] = $row["email"];
            $_SESSION["nome"] = $row["nome"];
        }
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    };
};
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div style="height: 3rem;">
        <nav><a href="../"><img class="re" src="../utilidades/imgs/re.png" alt="Seta de Retorno"></a></nav>
    </div>
    <div class="centralizado">
        <div class="centralizado" style="margin-top: 1rem;">
            <form id="form" class="formCadastro" method="post" autocomplete="on">
                <label class="labelCadastro" for="nome">Email</label>
                <input id="nome" name="login" class="inputCadastro" type="text">
                <label class="labelCadastro" for="nome">Senha</label>
                <input id="nome" name="pass" class="inputCadastro" type="password">
                <input id="enviar" style="margin-top: 1rem;" class="inputEnviar" type="submit" value="Login">
        </div>
        </form>

    </div>
</body>

</html>