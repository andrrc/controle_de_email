<?php
include_once("../includes/conexao.php");


if(isset($_POST['submit'])){
 $nome = $_POST['nome'];
 $secretaria = $_POST['secretaria'];
 $matricula = $_POST['matricula'];
 $sql = "INSERT into user(name,matricula,secretaria) VALUES('$nome','$matricula','$secretaria')";
 $result = mysqli_query($conexao, $sql);
 header("location:listagemEmail.php");
}
?>
