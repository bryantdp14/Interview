<body>
<center>
  <?php
//Incluimos la conexion del formulario que se encuenra en index.php
 include 'index.php';
 //declaramos las variables a  n que es el valor que toma de la caja de texto
$n = $_POST['n'];
$cont = 1;//declaramos la variable cont para que cuente las iteraciones para calcular el numero capicua

echo "Numero Entero: ".$n."<br>";//Indicamos cual es el numero introducido
while ($n <> strrev($n)){//generamos un ciclo mientras el numero entero sea diferente al numero invertido
    $n = $n + strrev($n); //sumamos el resultado para que se vuelava a sumar hasta que enccuentre su valor igual
    echo $n."  ".$cont++."<br>";//mostramos el total de numeros encontrados  la cantidad de iteracionesy
} ?>
  
    
</center>
    
</body>
