<?php

/*
La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes.
 De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.

Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de 
dicha clase (incluso los datos de los pasajeros). Utilice clases y arreglos  para   almacenar la información
 correspondiente a los pasajeros. Cada pasajero guarda  su “nombre”, “apellido” y “numero de documento”.

Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita 
cargar la información del viaje, modificar y ver sus datos.

Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido,
 numero de documento y teléfono. El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero.
  También se desea guardar la información de la persona responsable de realizar el viaje, para ello cree 
  una clase ResponsableV que registre el número de empleado, número de licencia, nombre y apellido.
   La clase Viaje debe hacer referencia al responsable de realizar el viaje.

Implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. 
Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos.
 Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información 
 del responsable del viaje.
*/
class viaje{
    private $codigoViaje;
    private $destino;
    private $cantidadMaxima;
    private $pasajeros;
    private $responsable;

    public function __construct($codigoV, $destinoV, $cantidadMaximaV, $pasajerosV,$responsableV){
        $this -> codigoViaje = $codigoV;
        $this -> destino = $destinoV;
        $this -> cantidadMaxima = $cantidadMaximaV;
        $this -> pasajeros = $pasajerosV;
        $this-> responsable = $responsableV;
    }

    public function getCodigoViaje(){
        return $this -> codigoViaje;
    }

    public function getDestino(){
        return $this -> destino;
    }

    public function getCantidadMaxima(){
        return $this-> cantidadMaxima;
    }
    
    public function getPasajeros(){
        return $this -> pasajeros;
    }

    public function getResponsable(){
        return $this-> responsable;
    }

    public function setCodigoViaje($codigoV){
        $this -> codigoViaje = $codigoV;
    }

    public function setDestino($destinoV){
        $this -> destino = $destinoV;
    }

    public function setCantidadMaxima($cantidadMaximaV){
        $this-> cantidadMaxima = $cantidadMaximaV;
    }
    
    public function setPasajeros($pasajerosV){
        $this -> pasajeros = $pasajerosV;
    }

    public function setResponsable($responsableV){
        $this-> responsable = $responsableV;
    }

    public function modificarPasajero($documento, $modificarNombre, $modificarApellido, $modificarTelefono) {
        $pasajeros = $this->getPasajeros();
        $encontrado = false; 
        foreach ($pasajeros as $pasajero) {
            if ($pasajero->getDni() == $documento) {
 
                $pasajero->setNombre($modificarNombre);
                $pasajero->setApellido($modificarApellido);
                $pasajero->setTelefono($modificarTelefono);
               
                $encontrado = true;

        }
    
        }
        return $encontrado;
    }

    public function agregarPasajero($nuevoPasajero) {
        $pasajeros = $this->getPasajeros();
        $valor = true;
        
        foreach ($pasajeros as $pasajero) {
            if ($pasajero->getDni() == $nuevoPasajero->getDni()) {
                $valor = false;  
            }
        }
        if (count($pasajeros) >= $this->getCantidadMaxima()) {
            $valor = false;
        }

        if ($valor==true) {
            $pasajeros[] = $nuevoPasajero;
            $this->setPasajeros($pasajeros);
        }
        return $valor; 
    }

    public function modificarResponsable($nuevoResponsable){
        $this->setResponsable($nuevoResponsable);
    }



    public function __toString() {
        $responsable= $this->getResponsable();
        $mostrar = "Código del viaje: " . $this->getCodigoViaje() . "\n".
               "Destino: " . $this->getDestino() . "\n".
               "Cantidad máxima de pasajeros: " . $this->getCantidadMaxima() . "\n". 
               "------------------------\n".
               "RESPONSABLE\n" . 
               "Nombre: ". $responsable->getNombre(). "\n".
               "Apellido: ". $responsable->getApellido(). "\n".
               "Numero de empleado: ". $responsable->getNumeroEmpleado()."\n". 
               "Numero de licencia: ". $responsable->getNumeroLicencia()."\n".
               "------------------------\n".
               "Pasajeros:\n";
    
        foreach ($this->getPasajeros() as $pasajero) {
            $mostrar .="\n Nombre: " . $pasajero->getNombre() . "\n".
                    "Apellido: " . $pasajero->getApellido() . "\n".
                    "DNI: " . $pasajero->getDni() . "\n" .
                    "Teléfono: " . $pasajero->getTelefono() . "\n".
                    "------------------------\n";
        }
    
        return $mostrar;
    }
}

?>