<?php
include_once"../../includes/conexao.php";
$id_usuario = $_GET['id_usuario'];
$id_email = $_GET['id_email'];
$sql_delete = "DELETE FROM user_email WHERE id_email = ".$id_email." AND id_user =".$id_usuario.";";
$result = mysqli_query($conexao,$sql_delete);
if($result){
    header("location:../listagemEmail/listagemEmail_User.php");
}
?>