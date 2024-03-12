<?php
require "../utilidades/autoload.php";
sessionador();
if (isset($_POST['enviar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $id = $_GET['id'];
    $sql = "UPDATE usuarios SET nome='$nome',email='$email',telefone='$telefone',cep='$cep',cpf='$cpf', senha='$senha' WHERE id = '$id';";
    var_dump($sql);
    $bd->query($sql);
    echo ('<script>alert("Cadastro Alterado");</script>');
    header("Location:/techweb-4b/Menus/Listausuarios.php", true);
}

if (isset($_GET['delid'])) {
    $sql = "DELETE FROM usuarios WHERE id = '" . $_GET['delid'] . "';";
    $bd->query($sql);
    echo ('<script>alert("Cadastro deletado");</script>');
    header("Location:/techweb-4b/Menus/Listausuarios.php", true);
}
$sql = "SELECT * FROM usuarios WHERE id = '" . $_GET['id'] . "';";
foreach ($bd->query($sql) as $row) {
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Alterar</title>
</head>

<body>
    <div style="height: 3rem;">
        <nav>
            <a href="../Menus/Listausuarios.php"><img class="re" src="../utilidades/imgs/re.png" alt="Seta de Retorno"></a>
        </nav>
    </div>
    <div class="centralizado">
        <h1>Alterando o Cadastro</h1>
    </div>
    <div class="centralizado" style="margin-top: 1rem;">
        <form id="form" class="formCadastro" method="post" autocomplete="off">
            <label class="labelCadastro" for="nome">Nome</label>
            <input id="nome" name="nome" class="inputCadastro" type="text" value="">
            <label class="labelCadastro" for="email">Email</label>
            <input id="email" name="email" class="inputCadastro" type="email">
            <label class="labelCadastro" for="telefone">Numero de telefone</label>
            <input id="telefone" name="telefone" class="inputCadastro" type="tel">
            <label class="labelCadastro" for="cep">Cep</label>
            <input id="cep" name="cep" class="inputCadastro" type="number">
            <label class="labelCadastro" for="cpf">CPF</label>
            <input id="cpf" name="cpf" class="inputCadastro" type="number">
            <label class="labelCadastro" for="senha">Senha</label>
            <input id="senha" name="senha" class="inputCadastro" type="password">
            <br>
            <input id="enviar" class="inputEnviar" nome="enviar" type="submit" onsubmit="alterar()" value="Enviar">
        </form>
    </div>
</body>

</html>