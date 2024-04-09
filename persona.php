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

class persona{ 

    private $nombre;
    private $apellido;
    private $dni;
    private $telefono;

    public function __construct($nombreP,$apellidoP,$dniP,$telefonoP){
    
        $this-> nombre = $nombreP;
        $this-> apellido = $apellidoP;
        $this-> dni = $dniP;
        $this-> telefono = $telefonoP;
    }

    public function getNombre (){
        return $this -> nombre;
    }
    public function getApellido (){
        return $this -> apellido;
    }
    public function getDni (){
        return $this-> dni;
    }
    public function getTelefono (){
        return $this-> telefono;
    }

    public function setNombre ($nombreP){
        $this -> nombre = $nombreP;
    }

    public function setApellido ($apellidoP){
        $this -> apellido = $apellidoP;
    }

    public function setDni($dniP){
        $this -> dni = $dniP;
    }
    public function setTelefono($telefonoP){
        $this-> telefono = $telefonoP;
    }
    
    public function __toString()
    {
    return ($this->getNombre()."\n".$this->getApellido()."\n".$this->getDni()."\n".$this->getTelefono()."\n");
    }
}

?>