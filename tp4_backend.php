<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Trabajo Practico Nº4  -  Dominguez Julian</h1>
    
    <h3>Ejercicio 1</h3>
    <p><b>Mostrar los numeros del 1 al 100.</b></p>
   
    <?php
    //ejercicio 1

    $i = 1;

    while ( $i <= 100) {
        print "<p> $i </p>\n";
        $i++;
    }

    ?>

    <br>
    <hr>

    <h3>Ejercicio 2</h3>
    <p><b>Mostrar los numeros del 100 al 1.</b></p>

    <?php
    //ejercicio 2

    $i = 100;

    while ( $i >= 1) {
        print "<p> $i </p>\n";
        $i--;
    }

    ?>

    <br>
    <hr>

    <h3>Ejercicio 3</h3>
    <p><b>Mostrar los numeros pares del 1 al 100.</b></p>

    <?php
    //ejercicio3

    $i = 1;

    while ( $i < 101) {
        if (($i%2)==0) {
        print "<p> $i </p>\n";
        }
        $i++;
    }

    ?>

    <br>
    <hr>

    <h3>Ejercicio 4</h3>
    <p><b>Mostrar los numeros impares del 1 al 100.</b></p>

    <?php
    //ejercicio4

    $i = 1;

    while ( $i < 101) {
        if (($i%2)==1) {
        print "<p> $i </p>\n";
        }
        $i++;
    }

    ?>

    <br>
    <hr>

    <h3>Ejercicio 5</h3>
    <p><b>Mostrar la suma de los numeros de 1 a 20.</b></p>

    <?php
    //ejercicio5

    $suma = 0;

    for ($i=0; $i < 21; $i++) {
        echo "<p> La suma de los numeros $suma + $i es ", $suma + $i, "</p>\n";
        $suma += $i;
    }

    print "El resultado de la suma TOTAL de los numeros del 1 al 20 es: $suma ";

    ?>

    <br>
    <hr>

    <h3>Ejercicio 6</h3>
    <p><b>Mostrar la suma de numeros pares de 1 a 20.</b></p>

    <?php
    //ejercicio6

    $suma = 0;

    for ($i=0; $i < 21; $i++) {
        if (($i%2)==0) {
            $suma+=$i;
            echo "<p> La suma de los numeros pares:  $suma + $i es ", $suma + $i,"</p>\n";
        }
    }

    print "El resultado de la suma TOTAL de los numeros pares del 1 al 20 es: $suma ";



    ?>

    <br>
    <hr>
       
</body>
</html>