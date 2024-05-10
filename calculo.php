<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado do Cálculo</title>
</head>
<body>
    <div class="result-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['num1']) && isset($_POST['num2']) && $_POST['num1'] != '' && $_POST['num2'] != '') {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];

                if ($operation != "add" && $operation != "subtract" && $operation != "multiply" && $operation != "divide" && $operation != "exponentiation" && $operation != "square_root" && $operation != "factorial") {
                    echo "<p class='error-message'>Operação inválida.</p>";
                } else if (!is_numeric($num1) || !is_numeric($num2)) {
                    echo "<p class='error-message'>Por favor, insira apenas números.</p>";
                } else {
                    switch ($operation) {
                        case "add":
                            $result = $num1 + $num2;
                            break;
                        case "subtract":
                            $result = $num1 - $num2;
                            break;
                        case "multiply":
                            $result = $num1 * $num2;
                            break;
                        case "divide":
                            if ($num2 != 0) {
                                $result = $num1 / $num2;
                            } else {
                                echo "<p class='error-message'>Não é possível dividir por zero!</p>";
                            }
                            break;
                        case "exponentiation":
                            $result = pow($num1, $num2);
                            break;
                        case "square_root":
                            $result = sqrt($num1 + $num2);
                            break;
                        case "factorial":
                            function factorial($num)
                            {
                                $result = 1;
                                for ($i = 1; $i <= $num; $i++) {
                                    $result *= $i;
                                }
                                return $result;
                            }
                            $result = factorial($num1 + $num2);
                            break;
                    }
                    if (isset($result)) {
                        $formatted_result = number_format($result, 2);
                        echo "<h2 class='result-message'>Resultado: $formatted_result</h2>";
                    }
                }
            } else {
                echo "<p class='error-message'>Por favor, preencha todos os campos.</p>";
            }
        }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </div>
    <footer>
        <div class="footer-container">
            <p>&copy; Desenvolvido por A. Hervis.</p>
        </div>
    </footer>
</body>
</html>
