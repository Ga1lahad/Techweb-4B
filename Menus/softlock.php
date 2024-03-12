<?php
require '../utilidades/autoload.php';
$teste = true;
foreach ($bd->query("SELECT email from `usuarios` where email = 'teste@teste.teste'") as $row) {
    $teste = false;
    /*Nao ta funcionando*/
    echo ('<script>setTimeout("alert("Anti-softlock ja usado antes");",1)</script>');
    header("Location:../", true);
}
if ($teste) {
    $sql = "INSERT into usuarios (nome,email,telefone,cep,cpf,senha)
        VALUES('adm','teste@teste.teste','000001','00001','00001','admin')";
    $bd->query($sql);
    header("Location:/techweb-4b", true);
}
