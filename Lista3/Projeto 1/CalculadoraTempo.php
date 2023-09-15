<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 1</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <h2>Calculadora de Tempo</h2>
    <div class="container">
        <form action="cronometro.php" method="post">
            <label for="dataInicial">Data e Hora Inicial:</label>
            <input type="datetime-local" id="dataInicial" name="dataInicial" required><br><br>
            
            <label for="dataFinal">Data e Hora Final:</label>
            <input type="datetime-local" id="dataFinal" name="dataFinal" required><br><br>
            
            <input type="submit" value="Calcular Diferença">
        </form>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dataInicial = new DateTime($_POST["dataInicial"]);
            $dataFinal = new DateTime($_POST["dataFinal"]);
            
            $diferenca = $dataInicial->diff($dataFinal);
            
            echo "<br><strong>Diferença:</strong><br>";
            echo " Anos: " . $diferenca->y . ", ";
            echo " Meses: " . $diferenca->m . ", ";
            echo " Dias: " . $diferenca->d . ", ";
            echo "  Horas: " . $diferenca->h . ", ";
            echo "Minutos: " . $diferenca->i . " e ";
            echo " Segundos: " . $diferenca->s . " ";
        }
        ?>