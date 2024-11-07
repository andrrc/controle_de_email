<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="/planilhas/src/components/AdicionarUsuario/style/adicionarUsuario.css">
</head>
<body>
    <form method="POST" action="../../script/adicionarUsuario.php">
        <label for="">Nome</label>
        <input type="text" name="nome">

        <label for="">Matricula</label>
        <input type="number" name="matricula">

        <label for="">Secretaria</label>
        <select name="secretaria" id="">
            <option value="SEA">SEA</option>
            <option value="SEF">SEF</option>
            <option value="SEMOB">SEMOB</option>
            <option value="SEDESP">SEDESP</option>
            <option value="SECULT">SECULT</option>
            <option value="SESP">SESP</option>
            <option value="SECI">SECI</option>
            <option value="SENJ">SENJ</option>
            <option value="SEMA">SEMA</option>
            <option value="SESA">SESA</option>
            <option value="SPD">SPD</option>
            <option value="SEG">SEG</option>
            <option value="SEED">SEED</option>
            <option value="SOURB">SOURB</option>
        </select>
        <input type="submit" value="Enviar" name="submit">
    </form>
</body>
</html>