<?php
include_once("../../includes/conexao.php");
include_once("../../includes/header.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <link rel="stylesheet" href="/planilhas/src/styles/listagem.css">
</head>
<body>
<div class="container">
    <div class="button-container">
        <button onclick="location.href='../adicionarEmail/adicionarEmail.php'">Adicionar Email</button>
        <button onclick="location.href='../adicionarUsuario/adicionarUsuario.php'">Adicionar Usuário</button>
        <button onclick="location.href='../vincularUsuario/vincularUsuario.php'">Vincular Usuário a um Email</button>
    </div>
    <table>
        <thead>
            <tr class="tr-atributos">
                <th class="td-atributos">Nome</th>
                <th class="td-atributos">Matricula</th>
                <th class="td-atributos">Secretaria</th>
                <th class="td-atributos">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `user`";
            $resultado = mysqli_query($conexao, $sql);
            while($userData = mysqli_fetch_assoc($resultado)){
                $id = $userData['id'];
                echo "<tr class='tr-dados'>";
                echo "<td class='td-dados'><a href='listagemUsuario_Email.php?id=".$id."'>".$userData['name']."</a></td>";
                echo "<td class='td-dados'>".$userData['matricula']."</td>";
                echo "<td class='td-dados'>".$userData['secretaria']."</td>";
                echo "<td class='td-dados'><a href='../editarUsuario/editarUsuario.php?id=".$id."'>Editar</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>