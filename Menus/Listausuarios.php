<?php
require "../utilidades/autoload.php";
sessionador();
$c = 0;
if (empty($_POST['pesquisa'])) {
    $pesquisa = "";
} else {
    $pesquisa = $_POST["pesquisa"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div style="height: 3rem;">
        <nav>
            <a href="../"><img class="re" src="../utilidades/imgs/re.png" alt="Seta de Retorno"></a>
        </nav>
    </div>
    <div class="centralizado" style="display: block; padding: 3rem; width:auto;">
        <form action="" method="POST">
            <input id="pesquisa" name="pesquisa" class="inputCadastro Lista" oninput="nomeFill()" type="text">
            <input id="enviar" class="inputEnviar Lista" type="submit" value="Pesquisar">
        </form>

        <table class="tabela">
            <tbody>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Opções</th>
                </tr>
                <?php
                $sql = "SELECT * FROM usuarios WHERE nome like '%$pesquisa%';";
                $rows = $bd->query($sql);
                foreach ($rows as $row) {
                    $c += 1;
                    if (($c % 2) == 0) {
                        echo ("<tr class='lid'>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['nome'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['telefone'] . "</td>
                        <td> <a href='alterdel.php?id=" . $row['id'] . "'><img src='../utilidades/imgs/write.png' alt='Excluir'></a><a href='alterdel.php?delid=" . $row['id'] . "'><img src='../utilidades/imgs/trash.png' alt='Excluir'></a></td>
                        </tr>");
                    } else {
                        echo ("<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['nome'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['telefone'] . "</td>
                        <td><a href='alterdel.php?id=" . $row['id'] . "'><img src='../utilidades/imgs/write.png' alt='Excluir'></a><a href='alterdel.php?delid=" . $row['id'] . "'><img src='../utilidades/imgs/trash.png' alt='Excluir'></a></td>
                        </tr>");
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>