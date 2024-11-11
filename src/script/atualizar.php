<?php
include_once"../includes/conexao.php";
if(isset($_POST['submit'])){
    
    if($_POST['name']){
        $id_usuario = $_POST['id'];
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $secretaria = $_POST['secretaria'];
        $sql = "UPDATE usuario SET nome = '$name', matricula = '$matricula', secretaria = '$secretaria' WHERE id = $id_usuario";
        $result = mysqli_query($conexao,$sql);
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animação de Carregamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
/* Estilo básico */
body, html {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f3f3f3;
}

.container {
    position: relative;
    width: 100px;
    height: 100px;
}

/* Animação de carregamento */
.loader {
    width: 50px;
    height: 50px;
    border: 5px solid #ccc;
    border-top-color: #3498db;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 1;
    transition: opacity 0.3s ease;
}

/* Ícone de sucesso */
.success-icon {
    font-size: 50px;
    color: #2ecc71;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: opacity 0.5s ease;
}

/* Animação giratória */
@keyframes spin {
    0% { transform: translate(-50%, -50%) rotate(0deg); }
    100% { transform: translate(-50%, -50%) rotate(360deg); }
}

/* Esconde o loader e mostra o ícone de sucesso após 3 segundos */
.container .loader {
    animation: spin 1s linear infinite; /* Gira continuamente */
    animation-delay: 0s;
    opacity: 1;
}

.container .loader {
    animation: spin 1s linear infinite;
    opacity: 1;
    animation-delay: 0s;
}

.container .loader {
    animation: spin 1s linear infinite;
    opacity: 1;
    animation-delay:
}
</style>
<body>
    <div class="container">
        <div class="loader"></div>
        <div class="success-icon">&#10004;</div>
    </div>
</body>
<script>
        // Redireciona após 3 segundos
        setTimeout(function() {
            window.location.href = "../components/listagemUsuario/listagemUsuario.php";
        }, 4000);
    </script>
</html>

