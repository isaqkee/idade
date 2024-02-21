<!DOCTYPE html>
<html>
<head>
   <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora Soma</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];
    ?>">
        Núm 1: <input type="text" name="num1"><br><br>
        <input type="submit" value="Somar">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (!empty($_POST['num1']) && !empty($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            
            $soma = $num1 + $num2;

            echo "<h3>A soma de $num1 e $num2 é: $soma</h3>";
        } else {
            echo "<h3>Preencha todos os campos.</h3>";
        }
    }
    ?>
</body>
</html>