<?php
include_once("../../includes/conexao.php");
//Puxar as informações do usuario
$id = $_GET['id'];
$sql_pull_user = "SELECT * FROM usuario WHERE id = " . $id;
$resultado_query_user = mysqli_query($conexao, $sql_pull_user);
while ($user = mysqli_fetch_assoc($resultado_query_user)) {
    $nome = $user['nome'];
    $secretaria = $user['secretaria'];
    $matricula = $user['matricula'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Email and User</title>
    <link rel="stylesheet" href="../../styles/listagem.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
<div class="container">
    <ul class="ul-email">
        <?php
        echo "<li class='li-email'>" . $id . "</li>";
        echo "<li class='li-email'>" . $nome . "</li>";
        echo "<li class='li-email'>" . $matricula . "</li>";
        echo "<li class='li-email'>" . $secretaria . "</li>";
        ?>
    </ul>
    <div class="table-responsive">
        <table>
            <tr>
                <td class="td-atributos">ID</td>
                <td class="td-atributos">Email</td>
                <td class="td-atributos">Hierarquia</td>
                <td class="td-atributos">Secretaria</td>
                <td class="td-atributos">Info Adicionais</td>
                <td class="td-atributos">Ações</td>
            </tr>
            <?php
            $sql_user_email = "SELECT * FROM usuario_email WHERE id_usuario =" . $id;
            $resultado_query_user_email = mysqli_query($conexao, $sql_user_email);
            while ($user_email = mysqli_fetch_assoc($resultado_query_user_email)) {
                $id_email = $user_email['id_email'];
                $id_user_email = $user_email['id_usuario'];
                $sql_email = "SELECT * FROM email WHERE id =" . $id_email;
                $resultado_email = mysqli_query($conexao, $sql_email);
                while ($email = mysqli_fetch_assoc($resultado_email)) {
                    $id_email_new = $email['id'];
                    $email_datas = $email['email'];
                    $secretaria_email = $email['secretaria'];
                    $hierarquia_email = $email['hierarquia'];
                    $info_adicional_email = $email['info_adicional'];
                    echo "<tr class='tr-dados'>";
                    echo "<td class='td-dados'>" . $id_email_new . "</td>";
                    echo "<td class='td-dados email-cell'><a href='../listagemEmail/listagemEmail_User.php?id=".$id_email."'>".$email_datas."</a></td>";
                    echo "<td class='td-dados'>" . $hierarquia_email . "</td>";
                    echo "<td class='td-dados'>" . $secretaria_email . "</td>";
                    echo "<td class='td-dados'>" . ($info_adicional_email ? $info_adicional_email : 'Nenhuma Informação Adicionada') . "</td>";
                    echo "<td class='td-dados'>edit</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</div>

    <div class="container-home">
        <a href="../../index.php"><img src="../../img/icon_home.png" alt="icone de home" width="50px"></a>
    </div>
</body>

</html>