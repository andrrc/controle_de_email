<?php
include_once "../../includes/conexao.php";
$nome = '';
$matricula = '';
$secretaria = '';
$id_usuario = $_GET['id'];
$sql = "SELECT * FROM user WHERE id=".$id_usuario.";";
$result = mysqli_query($conexao, $sql);
while($usuario = mysqli_fetch_assoc($result)){
    $nome = $usuario['nome'];
    $matricula = $usuario['matricula'];
    $secretaria = $usuario['secretaria'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    <link rel="stylesheet" href="/planilhas/src/styles/form.css">
</head>
<body>
    <form method="POST" action="../../script/atualizar.php">
        <?php echo "<input type='text' name='id' value='$id_usuario' hidden>"; ?>
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="<?php echo $nome; ?>">

        <label for="matricula">Matrícula</label>
        <input type="number" name="matricula" value="<?php echo $matricula; ?>">

        <label for="secretaria">Secretaria</label>
        <select name="secretaria">
            <option value="SEA" <?php echo ($secretaria == 'SEA') ? 'selected' : ''; ?>>SEA</option>
            <option value="SEF" <?php echo ($secretaria == 'SEF') ? 'selected' : ''; ?>>SEF</option>
            <option value="SEMOB" <?php echo ($secretaria == 'SEMOB') ? 'selected' : ''; ?>>SEMOB</option>
            <option value="SEDESP" <?php echo ($secretaria == 'SEDESP') ? 'selected' : ''; ?>>SEDESP</option>
            <option value="SECULT" <?php echo ($secretaria == 'SECULT') ? 'selected' : ''; ?>>SECULT</option>
            <option value="SESP" <?php echo ($secretaria == 'SESP') ? 'selected' : ''; ?>>SESP</option>
            <option value="SECI" <?php echo ($secretaria == 'SECI') ? 'selected' : ''; ?>>SECI</option>
            <option value="SENJ" <?php echo ($secretaria == 'SENJ') ? 'selected' : ''; ?>>SENJ</option>
            <option value="SEMA" <?php echo ($secretaria == 'SEMA') ? 'selected' : ''; ?>>SEMA</option>
            <option value="SESA" <?php echo ($secretaria == 'SESA') ? 'selected' : ''; ?>>SESA</option>
            <option value="SPD" <?php echo ($secretaria == 'SPD') ? 'selected' : ''; ?>>SPD</option>
            <option value="SEG" <?php echo ($secretaria == 'SEG') ? 'selected' : ''; ?>>SEG</option>
            <option value="SEED" <?php echo ($secretaria == 'SEED') ? 'selected' : ''; ?>>SEED</option>
            <option value="SOURB" <?php echo ($secretaria == 'SOURB') ? 'selected' : ''; ?>>SOURB</option>
        </select>

        <input type="submit" value="Enviar" name="submit">
    </form>

    <button type="button" class="btn-voltar" onclick="history.back()">
        <span class="icon">&#8592;</span>
    </button>
</body>
</html>
