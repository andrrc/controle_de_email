<?php
include_once("../includes/conexao.php");
$id = $_GET['id'];
$sql = "SELECT * FROM email WHERE id = " . $id;
$resultado_table_email = mysqli_query($conexao, $sql);
while ($user_data = mysqli_fetch_assoc($resultado_table_email)) {
    $email = $user_data['email'];
    $hierarquia = $user_data['hierarquia'];
    $secretaria = $user_data['secretaria'];
    $info_adicional = $user_data['info_adicional'];
}
$sql_user_email = "SELECT * FROM user_email WHERE id_email =" . $id;
$resultado_table_user_email = mysqli_query($conexao, $sql_user_email);



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem User and Email</title>
    <link rel="stylesheet" href="/planilhas/src/styles/listagem.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <ul class="ul-email">
            <?php
            echo "<li class='li-email'>" . $id . "</li>";
            echo "<li class='li-email'>" . $email . "</li>";
            echo "<li class='li-email'>" . $hierarquia . "</li>";
            echo "<li class='li-email'>" . $secretaria . "</li>";
            echo "<li class='li-email'>" . $info_adicional . "</li>";
            ?>
        </ul>
        <table>
            <tr>
            <td class="td-atributos">ID</td>
                <td class="td-atributos">Nome</td>
                <td class="td-atributos">Secretaria</td>
                <td class="td-atributos">Matricula</td>
            </tr>
            <?php
            //Nesta parte do codigo ele vai rodar um while para fatear o resultado do sql
            // Eu fiz uma query na tabela user_email porque é la onde esta registrado 
            //E la onde esta registrado qual usuario esta vinculado com tal email e vice-versa
            while ($user_email = mysqli_fetch_assoc($resultado_table_user_email)) {

                $id_email = $user_email['id_email'];

                $id_user_email = $user_email['id_user'];

                $sql_user = "SELECT * FROM user WHERE id =" . $id_user_email;
                $resultado_user = mysqli_query($conexao, $sql_user);
                while ($user = mysqli_fetch_assoc($resultado_user)) {
                    $id_user = $user['id'];
                    $nome_user = $user['name'];
                    $secretaria_user = $user['secretaria'];
                    $matricula_user = $user['matricula'];
                    echo "<tr class='tr-dados'>";
                    echo "<td class='td-dados'>" . $id_user . "</td>";
                    echo "<td class='td-dados'>" . $nome_user . "</td>";
                    echo "<td class='td-dados'>" . $secretaria_user . "</td>";
                    echo "<td class='td-dados'>" . $matricula_user . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</body>

</html>