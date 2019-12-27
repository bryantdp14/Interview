<?php
 include 'index.php';
 $cadena = $_POST['coordenadas'];
$separador = " ("; // O el que quieras
$a =str_replace("(", $separador, $cadena);//Cambiamos la coma por el $separador 

$a = explode(" ", $a);

echo $a [0]."<br>";
echo $a [1]."<br>";
echo $a [2]."<br>";
echo $a [3]."<br>";
