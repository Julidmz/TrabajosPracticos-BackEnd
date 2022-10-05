<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Trabajo Practico Nº5  -  Dominguez Julian</h1>
    
    <h3>Ejercicio 1</h3>
    <p><b>Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</b></p>
   
    <?php
    //ejercicio 1

    $par= [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
    foreach($par as $numpar){
        print "<p>$numpar<p>\n";
    }

    

    ?>

    <br>
    <hr>

    <h3>Ejercicio 2</h3>
    <p><b> Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la 
    matriz. Mostrar el esquema del array con print_r().</b></p>

    <?php
    //ejercicio 2

    $matriz= ["Pedro", "Ana", "34" , "1"];

    print "<pre>\n";
    print_r($matriz);
    print "<pre>\n";

    ?>

    <br>
    <hr>

    <h3>Ejercicio 3</h3>
    <p><b>Crear un array asociativo e introducir los siguientes valores:
          Nombre: Pedro 
          Apellido: Torres
          Dirección: Av. Mayor 3703
          Teléfono: 1122334455.</b></p>

    <?php
    //ejercicio3

    $datos_cliente= [
        'Nombre'=>"Pedro",
        'Apellido'=>"Torres",
        'Direccion'=>"Av. Mayor 3703",
        'Telefono'=>2212200091,
    ];

    print "<pre>\n";
    print_r($datos_cliente);
    print "<pre>\n";


    ?>

    <br>
    <hr>

    <h3>Ejercicio 4</h3>
    <p><b>Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y 
          Chicago, sin asignar índices al array. A continuación, muestra el contenido del array. 
          Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</b></p>

    <?php
    //ejercicio4

    $ciudades= ["Madrid", "Barcelona", "Londres" , "New York", "Los Angeles", "Chicago"];

    foreach($ciudades as $city => $city_value) {
        echo "<p>La ciudad con el indice ", $city , " es " , $city_value ," </pre>\n ";
    }

    ?>

    <br>
    <hr>

    <h3>Ejercicio 5</h3>
    <p><b>Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, 
        LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago. 
        Ejemplo: El índice de Madrid es MD.</b></p>

    <?php
    //ejercicio5

    $ciudades_indexado= ['MD'=>"Madrid", 'BCL'=>"Barcelona", 'LD'=>"Londres" , 'NY'=>"New York", 'LA'=>"Los Angeles", 'CCG'=>"Chicago"];

    foreach($ciudades_indexado as $city => $city_value) {
        echo "<p>El indice de ", $city_value , " es " , $city ," </pre>\n ";
    }

    ?>

    <br>
    <hr>
       
</body>
</html