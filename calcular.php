<!-- EJERCICIO B PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio B</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <?php
    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3']) && isset($_POST['numero4'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
        $numero4 = $_POST['numero4'];

        $suma = $numero1 + $numero2;
        $producto = $numero3 * $numero4;

        echo "<p>La suma de los dos primeros números es: $suma</p>";
        echo "<p>El producto del tercer y cuarto número es: $producto</p>";
    }
    ?>
</body>
</html>

