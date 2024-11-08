<?php
$mensagem = '';
include_once("../../includes/conexao.php");
if(isset($_POST['submit'])){
    $id_user = $_POST['user'];
    $id_email = $_POST['email'];
    $sql = "INSERT INTO user_email(id_user,id_email) VALUES('$id_user','$id_email')";
    $result = mysqli_query($conexao,$sql);
    if($result){
        $mensagem = "O usuario foi vinculado com sucesso!";
        header("refresh:1.5;url=../../components/ListagemEmail/listagemEmail.php");
    }else{
        $mensagem = "O usuario não foi vinculado com sucesso!". mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vincular Usuario</title>
    <link rel="stylesheet" href="../../styles/form.css">
</head>
<body>
    <form action="" method="POST">
        <label for="">Usuario:</label>
        <select name="user" id="">
            <?php
            $resultado = mysqli_query($conexao,"SELECT * FROM user");
            while($user = mysqli_fetch_assoc($resultado)){
                echo "<option value=".$user['id'].">".$user['name']."</option>";
            }
            ?>
            
        </select>
        <label for="">Email</label>
        <select name="email" id="">
            <?php
            $resultado_email = mysqli_query($conexao,"SELECT * FROM email");
            while($email_datas = mysqli_fetch_assoc($resultado_email)){
                echo "<option value=".$email_datas['id'].">".$email_datas['email']."</option>";
            }
            ?>
        </select>
        <input type="submit" value="Enviar" name="submit">
        <?php
            if($mensagem){
                echo "<p>".$mensagem."</p>";
            }
        ?>
    </form>
</body>
</html>