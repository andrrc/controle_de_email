<?php
include_once("../../includes/conexao.php");
$id = $_GET['id'];
$sql = "SELECT * FROM email WHERE id = " . $id;
$resultado_table_email = mysqli_query($conexao, $sql);
while ($email_data = mysqli_fetch_assoc($resultado_table_email)) {
    $email = $email_data['email'];
    $hierarquia = $email_data['hierarquia'];
    $secretaria = $email_data['secretaria'];
    $info_adicional = $email_data['info_adicional'];
}
$sql_usuario_email = "SELECT * FROM usuario_email WHERE id_email =" . $id;
$resultado_table_usuario_email = mysqli_query($conexao, $sql_usuario_email);



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Email and usuario</title>
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
            if($info_adicional == ''){

            }else{
            echo "<li class='li-email'>" . $info_adicional . "</li>";}
            ?>
        </ul>
        <div class="table-responsive">
        <table>
            <tr>
            <td class="td-atributos">ID</td>
                <td class="td-atributos">Nome</td>
                <td class="td-atributos">Secretaria</td>
                <td class="td-atributos">Matricula</td>
                <td class="td-atributos">Ações</td>
            </tr>
            <?php
            //Nesta parte do codigo ele vai rodar um while para fatear o resultado do sql
            // Eu fiz uma query na tabela usuario_email porque é la onde esta registrado 
            //E la onde esta registrado qual usuario esta vinculado com tal email e vice-versa
            while ($tabela_usuario_email = mysqli_fetch_assoc($resultado_table_usuario_email)) {

                $id_email = $tabela_usuario_email['id_email'];
                $id_usuario_email = $tabela_usuario_email['id_usuario'];

                $sql_usuario = "SELECT * FROM usuario WHERE id =" . $id_usuario_email;
                $resultado_usuario = mysqli_query($conexao, $sql_usuario);


                while ($usuario = mysqli_fetch_assoc($resultado_usuario)) {
                    $id_usuario = $usuario['id'];

                    $nome_usuario = $usuario['nome'];

                    $secretaria_usuario = $usuario['secretaria'];

                    $matricula_usuario = $usuario['matricula'];
                    
                    echo "<tr class='tr-dados'>";
                    echo "<td class='td-dados'>" . $id_usuario . "</td>";
                    echo "<td class='td-dados emaill-cell'><a href='../listagemUsuario/listagemUsuario_Email.php?id=".$id_usuario."'>".$nome_usuario."</a></td>";
                    echo "<td class='td-dados'>" . $secretaria_usuario . "</td>";
                    echo "<td class='td-dados'>" . $matricula_usuario . "</td>";
                    echo "<td class='td-dados'><a href='../desvincularUsuario/DesvincularUsuario.php?id_usuario=".$id_usuario."&id_email=".$id."'>Desvincular</a></td>";
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