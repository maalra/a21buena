<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NBA</title>
  </head>
  <body>
<?php

include "dbinsercion.php";
$dbinsercion = new dbinsercion();

$dbinsercion->anadirequipo($_POST["Nombre"],$_POST["Ciudad"],$_POST["Conferencia"],$_POST["Division"]);
$resultado=$dbinsercion->mostrarultimo($_POST["Nombre"],$_POST["Ciudad"],$_POST["Conferencia"],$_POST["Division"]);
while($fila=$resultado->fetch_assoc()){
echo "<br>";
echo "NOMBRE DEL EQUIPO: ".$fila["Nombre"];
echo "<br>";
echo "CIUDAD: ".$fila["Ciudad"];
echo "<br>";
echo "<hr>";
echo "CONFERENCIA: ".$fila["Conferencia"];
echo "<br>";
echo "DIVISION: ".$fila["Division"];
echo "<br>";
echo "<hr>";
}


?>
