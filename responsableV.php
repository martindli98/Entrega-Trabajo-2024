<?php

class responsableV{ 

private $nombre;
private $apellido;
private $numeroEmpleado;
private $numeroLicencia;

public function __construct($nombreP,$apellidoP,$numeroEmpleadoP,$numeroLicenciaP){

    $this-> nombre = $nombreP;
    $this-> apellido = $apellidoP;
    $this-> numeroEmpleado = $numeroEmpleadoP;
    $this-> numeroLicencia = $numeroLicenciaP;
}

public function getNombre (){
    return $this -> nombre;
}
public function getApellido (){
    return $this -> apellido;
}
public function getNumeroEmpleado (){
    return $this-> numeroEmpleado;
}
public function getNumeroLicencia (){
    return $this-> numeroLicencia;
}

public function setNombre ($nombreP){
    $this -> nombre = $nombreP;
}

public function setApellido ($apellidoP){
    $this -> apellido = $apellidoP;
}

public function setNumeroEmpleado($numeroEmpleadoP){
    $this -> numeroEmpleado = $numeroEmpleadoP;
}
public function setNumeroLicencia($numeroLicenciaP){
    $this-> numeroLicencia = $numeroLicenciaP;
}

public function __toString()
{
return ($this->getNombre()."\n".$this->getApellido()."\n".$this->getNumeroEmpleado()."\n".$this->getNumeroLicencia()."\n");
}
}

?>