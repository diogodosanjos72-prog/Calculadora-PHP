<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Calculadora</h1>
    </header>
    <main id="center">  
        <form action="pj1.php" method="get"> 
            <input type="number" name="num1" id="num1"> 
            <select name="calc" id="calc">
              <option value="+">+</option>
              <option value="-">-</option>
              <option value="*">*</option>
              <option value="/">/</option>
            </select>
            <input type="number" name="num2" id="num2"> 
         <input id="env" type="submit" value="calcular">
    </form>
    </main>
    <?php 
        @$num1 = $_GET ["num1"];
        @$num2 = $_GET ["num2"];
        @$operador = $_GET ["calc"];

        switch ($operador) {
            case '+':
                echo "<div> Resultado: " . ($num1 + $num2) . "</div>"; 
                break;

            case '-':
                echo "<div> Resultado: " . ($num1 - $num2) . "</div>";
                break;

            case '*':
              echo "<div> resultado: " . ($num1 * $num2) . "</div>";
                break;

            case '/':
                if ($num2 != 0) {
                    echo "<div> Resultado: " . ($num1 / $num2) . "</div>";    
                } else {
                    echo "<div> Erro: divisão por zero. </div>";
                }
                break;

            default:
                
                break;
        }
    ?>
</body>
</html>