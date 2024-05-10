<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Bem-vindo à Calculadora</h1>
        </div>
    </header>
    <main>
        <div class="calculator-container">
            <form action="calculo.php" method="post">
                <div class="input-group">
                    <label for="num1">Digite o primeiro número:</label>
                    <input type="text" name="num1" id="num1">
                </div>
                <div class="input-group">
                    <label for="num2">Digite o segundo número:</label>
                    <input type="text" name="num2" id="num2">
                </div>
                <div class="operation-buttons">
                    <button type="submit" name="operation" value="add">Adição</button>
                    <button type="submit" name="operation" value="subtract">Subtração</button>
                    <button type="submit" name="operation" value="multiply">Multiplicação</button>
                    <button type="submit" name="operation" value="divide">Divisão</button>
                    <button type="submit" name="operation" value="exponentiation">Exponenciação</button>
                    <button type="submit" name="operation" value="square_root">Raiz Quadrada</button>
                    <button type="submit" name="operation" value="factorial">Fatorial</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <div class="footer-container">
            <p>&copy; Desenvolvido por Angelo Hervis.</p>
        </div>
    </footer>
</body>
</html>
