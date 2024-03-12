<?php
require "conexao.php";
function sessionador()
{
    require('../utilidades/conexao.php');
    session_start();
    $count = 0;
    if (isset($_SESSION['nome'])) {
        $nome = $_SESSION['nome'];
        $email = $_SESSION['Email'];
        $sql = "SELECT email,nome FROM usuarios WHERE email = '$email' AND senha ='$nome';";
        foreach ($bd->query($sql) as $row) {
            $count + 1;
            if ($row['nome'] != $nome || $count > 1) {
                session_unset();
                session_destroy();
                header('Location:', true);
            }
        }
    }
}
