<?php
include_once("../includes/conexao.php");


if (isset($_POST['submit'])) {
    if ($_POST['email']) {
        $email = $_POST['email'];
        $hierarquia = $_POST['hierarquia'];
        $secretaria = $_POST['secretaria'];
        $info_adicional = $_POST['info_adicional'];
        $sql = "INSERT into email(email,hierarquia,secretaria,info_adicional) VALUES('$email','$hierarquia','$secretaria','$info_adicional')";
        $result = mysqli_query($conexao, $sql);
        header("location:../components/ListagemEmail/listagemEmail.php");
    } else {
        $nome = $_POST['nome'];
        $secretaria = $_POST['secretaria'];
        $matricula = $_POST['matricula'];
        $sql = "INSERT into user(name,matricula,secretaria) VALUES('$nome','$matricula','$secretaria')";
        $result = mysqli_query($conexao, $sql);
        header("location:../components/ListagemEmail/listagemEmail.php");
    }
}
