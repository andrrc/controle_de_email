<?php
include_once"../includes/conexao.php";
if(isset($_POST['submit'])){
    
    if($_POST['name']){
        $id_usuario = $_POST['id'];
        $name = $_POST['name'];
        $matricula = $_POST['matricula'];
        $secretaria = $_POST['secretaria'];
        $sql = "UPDATE user SET name = '$name', matricula = '$matricula', secretaria = '$secretaria' WHERE id = $id_usuario";
        $result = mysqli_query($conexao,$sql);
        if ($result) {
            // Se a consulta for bem-sucedida, retornar "sucesso"
            echo json_encode(['status' => 'success']);
        } else {
            // Se a consulta falhar, retornar "erro"
            echo json_encode(['status' => 'error', 'message' => mysqli_error($conexao)]);
        }
    }
}
?>
