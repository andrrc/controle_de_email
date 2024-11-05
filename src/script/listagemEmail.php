<?php
include_once("../includes/conexao.php");
include_once("../includes/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <link rel="stylesheet" href="../styles/listagemEmail.css">
</head>
<body>
    <section>
        <div> 
        <button><a href="adicionarEmail.php">Adicionar Email</a></button>    
        <button><a href="adicionarUsuario.php">Adicionar Usuario</a></button> 
        <button><a href="vincularUsuario.php">Vincular usuario a um email</a></button> 
        </div>
<table>
<tr class="tr-atributos">
<td class="td-atributos">Email</td>
<td class="td-atributos">Hierarquia</td>
<td class="td-atributos">Secretaria</td>
<td class="td-atributos">Informações Adicionais</td>
<td class="td-atributos">Ações</td>
</tr>
    <?php
    $sql = "SELECT * FROM `email`";
    $resultado = mysqli_query($conexao,$sql);
    while($userData = mysqli_fetch_assoc($resultado)){
        $id = $userData['id'];
        echo "<tr class='tr-dados'>";
        echo "<td class='td-dados'><a href='listagem_user_email.php?id=".$id."'>".$userData['email']."</a></td>";
        echo "<td class='td-dados'>".$userData['hierarquia']."</a></td>";
        echo "<td class='td-dados'>".$userData['secretaria']."</a></td>";
        echo "<td class='td-dados'>".$userData['info_adicional']."</a></td>";
        echo "<td class'td-dados'><a href='editarEmail.php?id=".$id."'>Editar Email</a></td>";
        echo "</tr>";
    }
    
    ?>
</table>
</section>
</body>
</html>