<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Número Binário</title>
</head>
<body>
    <h1>Conversor de Decimal para Binário</h1>
    <form method="post">
        <label for="decimal">Digite um número decimal:</label>
        <input type="number" name="decimal" id="decimal" required>
        <button type="submit">Converter</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["decimal"])) {
        $decimal = intval($_POST["decimal"]);
        $binario = decbin($decimal);
        echo "<p>O número decimal <strong>$decimal</strong> em binário é <strong>$binario</strong>.</p>";
    }
    ?>
</body>
</html>