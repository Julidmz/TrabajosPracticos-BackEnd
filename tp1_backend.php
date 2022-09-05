<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Trabajo Practico Nº1</h1>
    
    <h3>Ejercicio 1</h3>
   
    <?php
    //ejercicio 1

        echo "Hola mundo";

    ?>

    <br>
    <hr>

    <h3>Ejercicio 2</h3>

    <?php
    //ejercicio 2

        $mensaje = "Hola mundo";

        echo $mensaje;

    ?>

    <br>
    <hr>

    <h3>Ejercicio 3</h3>

    <?php
    //ejercicio3
        $variable_A = 144;
        $variable_B = 12;
        $suma = $variable_A + $variable_B;
        $resta = $variable_A - $variable_B;
        $multiplicacion = $variable_A * $variable_B;
        $division = $variable_A / $variable_B;
        $resto = $variable_A % $variable_B; 

        echo "La suma de las variables enteras es: ", $suma;
    ?>
    <hr>
    <?php
        echo "La resta de las variables enteras es: ", $resta;
    ?>
    <br>
    <hr>
    <?php
        echo "La multiplicacion de las variables enteras es: ", $multiplicacion;
    ?>
    <br>
    <hr>
    <?php
        echo "La division de las variables enteras es: ", $division;
    ?>
    <br>
    <hr>
    <?php
        echo "El resto de la division de las variables enteras es: ", $resto;
    ?>

    <br>
    <hr>

    <h3>Ejercicio 4</h3>

    <?php
        //ejercicio4
        $grados_celcius = 20;
        $grados_fahrenheit = ($grados_celcius * 1.8) + 32;

        echo $grados_celcius, " ºC transformados en grados fahrenheit es: ", $grados_fahrenheit , " ºF";
    ?>

    <br>
    <hr>

    <h3>Ejercicio 5</h3>

    <?php
        //ejercicio5

        //a) 
        $base = 18;
        $altura = 12;
        $perimetro_rectangulo = 2*($base + $altura);
        $area_rectangulo = $base * $altura;

        //b)
        $radio = 30;
        $pi = 3.14;
        $perimetro_circulo = 2 * $radio * $pi;
        $area_circulo = $pi * $radio**2;

        echo " El perimetro del rectángulo es: ", $perimetro_rectangulo;
    ?>
    <br>
    <hr>
    <?php
        echo " El área del rectángulo es: ", $area_rectangulo;
    ?>
    <br>
    <hr>
    <?php
        echo " El perimetro del circulo es: ", $perimetro_circulo;
    ?>
    <br>
    <hr>
    <?php
        echo " El área del circulo es: ", $area_circulo;
    ?>

    
</body>
</html>