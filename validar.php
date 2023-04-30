<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio C</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <?php
    if(isset($_POST["numero1"]) && isset($_POST["numero2"])){
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        if($numero2 != 0){
            if($numero1 > $numero2){
                $suma = $numero1 + $numero2;
                $diferencia = $numero1 - $numero2;
                echo "<p>El resultado de la suma es: $suma</p>";
                echo "<p>El resultado de la diferencia es: $diferencia</p>";
            } else {
                $producto = $numero1 * $numero2;
                $division = $numero1 / $numero2;
                echo "<p>El resultado del producto es: $producto</p>";
                echo "<p>El resultado de la división es: $division</p>";
            }
        } else {
            echo "<p>Error: El segundo número no puede ser cero</p>";
        }
    }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>