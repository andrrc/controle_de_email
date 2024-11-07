<!-- components/adicionarEmail/form.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="/planilhas/src/styles/form.css">

</head>
<body>
<form method="POST" action="/planilhas/src/script/adicionarEmail.php">
    <label for="">Email:</label>
    <input type="email" name="email">

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

    <label for="">Hierarquia</label>
    <select name="hierarquia" id="">
        <option value="individual">Individual</option>
        <option value="setores">Setores</option>
        <option value="secretarios">Secretarios</option>
        <option value="diretores">Diretores</option>
        <option value="chefes">Chefes</option>
        <option value="exclusivo">Exclusivo</option>
        <option value="restrito">Restrito</option>
    </select>

    <label for="">Informações Adicionais</label>
    <input type="text" name="info_adicional">

    <input type="submit" value="Enviar" name="submit">
</form>

<!-- Botão Voltar -->
<button type="button" class="btn-voltar" onclick="history.back()">
    <span class="icon">&#8592;</span>
</button>

</body>
</html>