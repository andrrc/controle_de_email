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
    <div class="table-responsive">
    <table>
            <tr class="tr-atributos">
                <th class="td-atributos">Email</th>
                <th class="td-atributos">Hierarquia</th>
                <th class="td-atributos">Secretaria</th>
                <th class="td-atributos">Informações Adicionais</th>
                <th class="td-atributos">Ações</th>
            </tr>
            <?php
            $sql = "SELECT * FROM `email`";
            $resultado = mysqli_query($conexao, $sql);
            while($userData = mysqli_fetch_assoc($resultado)){
                $id = $userData['id'];
                echo "<tr class='tr-dados'>";
                echo "<td class='td-dados email-cell'><a href='listagemEmail_User.php?id=".$id."'>".$userData['email']."</a></td>";
                echo "<td class='td-dados'>".$userData['hierarquia']."</td>";
                echo "<td class='td-dados'>".$userData['secretaria']."</td>";
                echo "<td class='td-dados'>".$userData['info_adicional']."</td>";
                echo "<td class='td-dados'><a href='editarEmail.php?id=".$id."'>Editar Email</a></td>";
                echo "</tr>";
            }
            ?>
    </table>
    </div>
</div>

</body>
</html>