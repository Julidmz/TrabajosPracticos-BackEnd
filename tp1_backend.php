<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Trabajo Practico Nº1  -  Dominguez Julian</h1>
    
    <h3>Ejercicio 1</h3>
    <p><b>Imprima por pantalla:"Hola mundo".</b></p>
   
    <?php
    //ejercicio 1

        echo "Hola mundo";

    ?>

    <br>
    <hr>

    <h3>Ejercicio 2</h3>
    <p><b>Cargue en una variable la cadena de caracteres "Hola mundo" y luego la imprima por pantalla.</b></p>

    <?php
    //ejercicio 2

        $mensaje = "Hola mundo";

        echo $mensaje;

    ?>

    <br>
    <hr>

    <h3>Ejercicio 3</h3>
    <p><b>Crear dos variables enteras y mostrar por pantalla la suma, la resta, la multiplicacion, la division entera y el resto de la division entera.</b></p>
    <p><b>La variable A es 144 y la variable B es 12</b></p>

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
    <p><b>Realizar la transformacion de grados Celcius a Fahrenheit para el valor 20ºC y luego lo imprima por pantalla.</b></p>

    <?php
        //ejercicio4
        $grados_celcius = 20;
        $grados_fahrenheit = ($grados_celcius * 1.8) + 32;

        echo $grados_celcius, " ºC transformados en grados fahrenheit es: ", $grados_fahrenheit , " ºF";
    ?>

    <br>
    <hr>

    <h3>Ejercicio 5</h3>
    <p><b>Implementar algoritmos que permitan:
        a) Calcular el perimetro y el area de un rectangulo, dado que su base es 18cm y su altura 12cm.
        b) Calcular el perimetro y el area de un circulo, dado que su radio es de 30cm.</b></p>

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

        echo " El perimetro del rectángulo es de ", $perimetro_rectangulo, " cm";
    ?>
    <br>
    <hr>
    <?php
        echo " El área del rectángulo es de ", $area_rectangulo, " cm";
    ?>
    <br>
    <hr>
    <?php
        echo " El perimetro del circulo es de ", $perimetro_circulo, " cm";
    ?>
    <br>
    <hr>
    <?php
        echo " El área del circulo es de ", $area_circulo, " cm";
    ?>

    
</body>
</html>