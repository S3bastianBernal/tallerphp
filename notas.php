<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>1</h1>
    <form action="notas.php" method="post">
        <label for="">Porfavor digitar las notas de 10 a 50</label>
        <label>Nombre del estudiante</label>
        <input type="text" name="nombre">
        <label for="">Nota 1</label>
        <input type="number" name="nota1">
        <label for="">Nota 2</label>
        <input type="number" name="nota2">
        <label for="">Nota 3</label>
        <input type="number" name="nota3">
        <input type="submit" value="mirar resultados">
    </form>
    <h1>2</h1>
    <form action="notas.php" method="post">
        <label>Digitar numero</label>
        <input type="number" name="numero">
    </form>
    <h1>3</h1>
    <form action="notas.php" method="post">
        <label>Digitar Intensidad</label>
        <input type="number" name="intensida">
        <label>Digitar Resistencia</label>
        <input type="number" name="resistencia">
        <input type="submit" value="calcular voltaje">
    </form>
    <h1>4</h1>
    <form action="notas.php" method="post">
        <label>Digitar Nombre y edad estudiante 1</label>
        <input type="text" name="nombre1">
        <input type="number" name="edad1">
        <label>Digitar Nombre y edad estudiante 2</label>
        <input type="text" name="nombre2">
        <input type="number" name="edad2">
        <label>Digitar Nombre y edad estudiante 3</label>
        <input type="text" name="nombre3">
        <input type="number" name="edad3">
        <input type="submit" value="subir datos">
    </form>
    <h1>5</h1>
    <form action="notas.php" method="post">
        <label>Digitar numero</label>
        <input type="number" name="number1">
        <label>Digitar numero</label>
        <input type="number" name="number2">
        <input type="submit" value="comparar datos">
    </form>
    <h1>6</h1>
    <form action="notas.php" method="post">
        <label>Digitar Nombre,sexo y nota del estudiante 1</label>
        <input type="text" name="name1">
        <input type="text" name="sex1">
        <input type="number" name="note1">
        <label>Digitar Nombre,sexo y nota del estudiante 2</label>
        <input type="text" name="name2">
        <input type="text" name="sex2">
        <input type="number" name="note2">
        <label>Digitar Nombre,sexo y nota del estudiante 3</label>
        <input type="text" name="name3">
        <input type="text" name="sex3">
        <input type="number" name="note3">
        <input type="submit" value="subir datos">
    </form>
    <h1>7</h1>
    <form action="notas.php" method="post">
        <label>Nombre del articulo</label>
        <input type="text" name="nombreCliente">
        <label for="">precio</label>
        <input type="number" name="precio">
        <label for="">cantida</label>
        <input type="number" name="cantidadPro">
        <input type="submit" value="mirar factura">
    </form>
    <h1>8</h1>
    <form action="notas.php" method="post">
        <label>lado del cuadrado</label>
        <input type="number" name="lado">
        <label >Rectangulo</label>
        <label for="">largo</label>
        <input type="number" name="largo">
        <label for="">ancho</label>
        <input type="number" name="ancho">
        <input type="submit" value="calcular figuras">
    </form>
    <h1>9</h1>
    <form action="notas.php" method="post">
        <label>Digitar los datos de la atlte 1</label>
        <label for="">nombre</label>
        <input type="text" name="nameA1">
        <label for="">salto</label>
        <input type="text" name="marca1">
        <label>Digitar los datos de la atlte 2</label>
        <label for="">nombre</label>
        <input type="text" name="nameA2">
        <label for="">salto</label>
        <input type="text" name="marca2">
        <label>Digitar los datos de la atlte 3</label>
        <label for="">nombre</label>
        <input type="text" name="nameA3">
        <label for="">salto</label>
        <input type="text" name="marca3">
        <input type="submit" value="subir datos">
    </form>
    <h1>10</h1>
    <form action="notas.php" method="post">
        <label>Primer Numero</label>
        <input type="number" name="nam1">
        <label for="">Segundo Numero</label>
        <input type="number" name="nam2">
        <label for="">Tercer Numero</label>
        <input type="number" name="nam3">
        <input type="submit" value="calcular">
    </form>
</body>
</html>

<?php
    //1.
    /* $Nota_Final = ($_POST["nota1"]+$_POST["nota2"]+$_POST["nota2"])/3;

    if($Nota_Final >= 39){
        echo "el estudiante {$_POST["nombre"]} fue Becado";
    }
    if ($Nota_Final < 39){
        echo "el estudiante {$_POST["nombre"]} debe Estudiar mas";
    } */
    //2.
    /* $resultado = $_POST["numero"] % 2;
    if ($resultado == 0) {
        echo "el numero es par";
    }
    else{
        echo "el numero es impar";
    } */
    //3.
    /* $voltaje = $_POST["intensida"] * $_POST["resistencia"];
    echo "el voltaje de la fuente es de {$voltaje} voltios" */
    //4.
    /* $mayor = 0;
    $nombreMayor = "";
        
        if ($_POST["edad1"] > $mayor) {
            $mayor = $_POST["edad1"];
            $nombreMayor = $_POST["nombre1"];
        }
        if ($_POST["edad2"] > $mayor) {
            $mayor = $_POST["edad2"];
            $nombreMayor = $_POST["nombre2"];
        }
        if ($_POST["edad3"] > $mayor) {
            $mayor = $_POST["edad3"];
            $nombreMayor = $_POST["nombre3"];
        }
    echo "el estudiante de mas edad es {$nombreMayor} con un edad de {$mayor} años" */
    //5.
    /* if ($_POST["number1"]>$_POST["number2"]) {
        $suma = $_POST["number1"] + $_POST["number2"];
        $diferencia = $_POST["number1"] - $_POST["number2"];
        echo "la suma de los numero es {$suma} y su diferencia es de {$diferencia}";
    }
    if ($_POST["number1"]<$_POST["number2"]) {
        $multiplicacion = $_POST["number1"] * $_POST["number2"];
        $division = $_POST["number2"] / $_POST["number1"];
        echo "la multiplicacion de los numero es {$multiplicacion} y su division es  {$division}";
    } */
    //6.
   /*  $notaMayor = 0;
    $notaMenor = 999;
    $nota1 = $_POST["note1"];
    $nota2 = $_POST["note2"];
    $nota3 = $_POST["note3"];
    $nombre1 = $_POST["name1"];
    $nombre2 = $_POST["name2"];
    $nombre3 = $_POST["name3"];
    $nombreMayor = "";
    $nombreMenor = "";
    $hombre = 0;
    $mujeres = 0;
    


    if ( $nota1 > $notaMayor) {
        $notaMayor = $nota1;
        $nombreMayor = $nombre1;
    if( $nota2 > $notaMayor){
        $notaMayor = $nota2;
        $nombreMayor = $nombre2;
    }
    if( $nota3 > $notaMayor){
        $notaMayor = $nota3;
        $nombreMayor = $nombre3;
    }
    if ( $nota1 == $nota2 && $nota1 > $nota3) {
        $nombreMayor = $nombre2." y ".$nombre1;
    }
    if ( $nota1 == $nota3 && $nota1 > $nota2) {
        $nombreMayor = $nombre1." y ".$nombre3;
    }
    if ( $nota2 == $nota3 && $nota2 > $nota1) {
        $nombreMayor = $nombre2." y ".$nombre3;
    } 
    }
    if ( $nota1 < $notaMenor) {
        $notaMenor = $nota1;
        $nombreMenor = $nombre1;
    if( $nota2 < $notaMenor){
        $notaMenor = $nota2;
        $nombreMenor = $nombre2;
    }
    if( $nota3 < $notaMenor){
        $notaMenor = $nota3;
        $nombreMenor = $nombre3;
    }
    if ( $nota1 == $nota2 && $nota1 < $nota3) {
        $nombreMenor = $nombre2." y ".$nombre1;
    }
    if ( $nota1 == $nota3 && $nota1 < $nota2) {
        $nombreMenor = $nombre1." y ".$nombre3;
    }
    if ( $nota2 == $nota3 && $nota2 < $nota1) {
        $nombreMenor = $nombre2." y ".$nombre3;
    } 
    }
    if ($_POST["sex1"] == "hombre" || $_POST["sex1"] == "masculino") {
        $hombre++;
    }
    else {
        $mujeres++;
    }
    if ($_POST["sex2"] == "hombre" || $_POST["sex2"] == "masculino") {
        $hombre++;
    }
    else {
        $mujeres++;
    }
    if ($_POST["sex3"] == "hombre" || $_POST["sex3"] == "masculino") {
        $hombre++;
    }
    else {
        $mujeres++;
    }
    echo "el estudiante con la nota mayor fue {$nombreMayor} con una nota de {$notaMayor} <br>";
    echo "el estudiante con la nota menor fue {$nombreMenor} con una nota de {$notaMenor} <br>";
    echo "el total de estudiantes mujeres fueron {$mujeres} y de hombres fue {$hombre}<br>"; */
   //7.
    /* $nombre = $_POST["nombreCliente"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidadPro"];
    $total = $precio * $cantidad;
    echo "el cliente compro el articulo {$nombre}, compro {$cantidad} articulos de los ya mencionados,<br> cada un cuesta {$precio}<br>
    el total a pagar fue de $ {$total}" */
   //8.
   //cuadrado
    /* $lado = $_POST["lado"];
    $cuboPerimetro = $lado * 4; */
   //rectangulo 
   /*  $ancho = $_POST["ancho"];
    $largo = $_POST["largo"];
    $rectanguloArea = $largo * $ancho;


    echo "el perimetro del cuadrado es de {$cuboPerimetro}<br>
    el area del rectangulo es de {$rectanguloArea}" */
   //9. 
    /* $record = 15.50;
    $maximoSalto = 0;
    $minimoSalto = 999;
    $nombreMayor = "";
    $marca1 = $_POST["marca1"];
    $marca2 = $_POST["marca2"];
    $marca3 = $_POST["marca3"];
    $nombre1 = $_POST["nameA1"];
    $nombre2 = $_POST["nameA2"];
    $nombre3 = $_POST["nameA3"];

    if ( $marca1 > $maximoSalto) {
        $maximoSalto = $marca1;
        $nombreMayor = $nombre1;
    if( $marca2 > $maximoSalto){
        $maximoSalto = $marca2;
        $nombreMayor = $nombre2;
    }
    if( $marca3 > $maximoSalto){
        $maximoSalto = $marca3;
        $nombreMayor = $nombre3;
    }
    if ( $marca1 == $marca2 && $marca1 > $marca3) {
        $nombreMayor = $nombre2." y ".$nombre1;
    }
    if ( $marca1 == $marca3 && $marca1 > $marca2) {
        $nombreMayor = $nombre1." y ".$nombre3;
    }
    if ( $marca2 == $marca3 && $marca2 > $marca1) {
        $nombreMayor = $nombre2." y ".$nombre3;
    } 
    }
    if ($maximoSalto > $record){
        echo "se rompio el record y fue impuesto por la o los atletas {$nombreMayor} llevandose el bono de 500 millones <br>";
    }
    echo "la atleta ganadora del oro fue {$nombreMayor} con un salto de {$maximoSalto} metros";
 */
   //10.
    /* $numero_1 = $_POST["nam1"];
    $numero_2 = $_POST["nam2"];
    $numero_3 = $_POST["nam3"];
    $suma = $numero_1 + $numero_2 + $numero_3;
    $promedio = ($numero_1 + $numero_2 + $numero_3)/3;
    $Total_valores = 3;
    $mayorNumero = 0; 
    $menorNumero = 999; 
    if ($numero_1 > $mayorNumero) {
        $mayorNumero = $numero_1;
    }
    if ($numero_2 > $mayorNumero) {
        $mayorNumero = $numero_2;
    }
    if ($numero_3 > $mayorNumero) {
        $mayorNumero = $numero_3;
    }
    if ($numero_1 < $menorNumero) {
        $menorNumero = $numero_1;
    }
    if ($numero_2 < $menorNumero) {
        $menorNumero = $numero_2;
    }
    if ($numero_3 < $menorNumero) {
        $menorNumero = $numero_3;
    }
    echo "la suma de los valores es de {$suma} su promedio es de {$promedio}<br>
    el total de los valores registrados fue de {$Total_valores}<br>
    el numero mayor fue {$mayorNumero} y el menor fue {$menorNumero}" */

?>