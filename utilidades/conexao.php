<?php
try {
    /*Faz a conexão com o banco*/
    $bd = new PDO('mysqli:host=localhost;dbname=techweb', 'root@localhost', '');
    /*Define o PDO do $bd para capturar os erros*/
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    /*Define  $e como a variavel que armazena o erro e o imprime logo abaixo*/
    echo 'ERROR: ' . $e->getMessage();
}
