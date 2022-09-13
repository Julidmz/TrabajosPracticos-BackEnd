<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Trabajo Practico Nº2  -  Dominguez Julian</h1>
    
    <h3>Ejercicio 1</h3>
    <p><b>Crear una variable n y validar que sea un número positivo.</b></p>
   
    <?php
    //ejercicio 1

    $n = rand(0,100);

    if($n > 0){
        echo "La variable ingresada n es un numero positivo";
    }
    else {
        echo "La variable ingresada n es un numero negativo";
    }

    ?>

    <br>
    <hr>

    <h3>Ejercicio 2</h3>
    <p><b>Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</b></p>

    <?php
    //ejercicio 2

    $n = rand(1,10);

    if($n > 1 and $n < 10){
        echo "El valor de la variable n es mayor que 1 y menor que 10";
    }
    else {
        echo "La variable no cumple ninguna de las dos condiciones";
    }

    ?>

    <br>
    <hr>

    <h3>Ejercicio 3</h3>
    <p><b>Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</b></p>

    <?php
    //ejercicio3

    $n = random_int(0,50);

    if($n > 10){
        echo "El valor de la variable n es mayor que 10";
    }
    elseif($n < 2){
        echo "El valor de la variable n es menor que 2";

    }
    else {
        echo "La variable no cumple ninguna de las dos condiciones";
    }

    ?>

    <br>
    <hr>

    <h3>Ejercicio 4</h3>
    <p><b>Crear dos variables, una con nombre numero1 y otra con el nombre de numero2: <br>
        * Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta. <br>
        * Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, la división entera y el resto de la división.<br>
        * Si numero1 y numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</b></p>

    <?php
    //ejercicio4
    $numero1 = random_int(0,50);
    $numero2 = random_int(0,50);
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division_entera = $numero1 / $numero2;
    $resto_division = $numero1 % $numero2;

    if($numero1 > $numero2) {
        echo "La suma de las variables numero1 y numero2 es: ", $suma ."<br>";
        echo "La resta de las variables numero1 y numero2 es: ", $resta ."<br>";
    }
    elseif($numero2 > $numero1){
        echo "La multiplicacion de las variables numero1 y numero2 es: ", $multiplicacion ."<br>";
        echo "La division entera de las variables numero1 y numero 2 es: ", $division_entera ."<br>";
        echo "El resto de la division de las variables numero1 y numero2 es: ", $resto_division ."<br>";
    }
    else {
        echo "Los numeros ingresados son iguales";
    }

    ?>

    <br>
    <hr>
       
</body>
</html>