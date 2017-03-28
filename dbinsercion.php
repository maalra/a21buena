<?php
class dbinsercion
{
  private $host="localhost";
  private $user="root";
  private $pass="root";
  private $name="nba";
  Protected $nombre;
  Protected $ciudad;
  Protected $conferencia;
  Protected $division;


  private $conexion;
  private $error=false;



  function __construct(){
  $this->conexion = new mysqli($this->host,$this->user,$this->pass, $this->name);
  if($this->conexion->connect_errno){
  $this->error=true;
    }
  }
  function geterror(){
  return $this->error;
  }

  function anadirequipo($nombre, $ciudad, $conferencia, $division){
    $sqlinsercion="INSERT INTO Equipos (Nombre, Ciudad, Conferencia, Division) VALUES ('".$nombre."', '".$ciudad."', '".$conferencia."', '".$division."')";
    if(!$this->conexion->query($sqlinsercion));
  }
  function mostrarultimo($nombre){
    $resultado=$this->conexion->query("SELECT * from equipos where Nombre='".$nombre."'");
  }
}
?>
