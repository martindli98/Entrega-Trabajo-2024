<?php

include 'viaje.php';
include 'persona.php';
include 'responsableV.php';

$persona1= new persona ("Rodrigo","Velo",42806093,2944537109);
$persona2= new persona ("Hernan","Galileo",42123093,2999537109);
$persona3= new persona ("Augusto","Galilei",42321093,29412337109);
$persona4= new persona ("Martin","De La Iglesia",41384472,2912537109);
$persona5= new persona ("Leo","Messi",45806093,2948537109);

$pasajeros=[ $persona1,$persona2,$persona3,$persona4,$persona5];
$responsable= new responsableV("Diego","Armando",1886,10);
$viaje= new viaje (12345,"Burquinafaso",6,$pasajeros,$responsable);



do{
    echo "                         ";
    echo "\n| - - - MENU - - - |\n";
    echo "1. Ver datos.\n";
    echo "2. Modificar pasajero.\n";
    echo "3. Agregar pasajero.\n";
    echo "4. Modificar Responsable. \n";
    echo "5. Salir";
    $i=trim(fgets(STDIN));
    
    if ($i<1 || $i>5){
        echo "INGRESE UN NUMERO DEL MENU POR FAVOR, GRACIAS.";
    }
    switch ($i) {
        case '1':
            echo $viaje;
            break;
        case '2':
                echo "ingrese numero de documento a modificar: ";
                $modificarDoc= trim(fgets(STDIN));
                echo "Ingrese nombre: ";
                $modificarNom= trim(fgets(STDIN));
                echo "Ingrese Apellido: ";
                $modificarAp=trim(fgets(STDIN));
                echo "Ingrese Telefono: ";
                $modificarTel= trim(fgets(STDIN));

                $modificarPasajero= $viaje->modificarPasajero($modificarDoc,$modificarNom,$modificarAp,$modificarTel);

                if ($modificarPasajero==true){
                    echo "Pasajero modificado con éxito.";
                    } else {
                        echo "El pasajero no se encuentra en el viaje.";
                    }

            break;
        case '3':
            echo "\nIngrese DNI a agregar: \n";
            $agregarDni=trim(fgets(STDIN));
            echo "Ingrese nombre: \n";
            $agregarNombre= trim(fgets(STDIN));
            echo "Ingrese apellido: \n";
            $agregarApellido= trim(fgets(STDIN));
            echo "Ingrese telefono: \n";
            $agregarTelefono=trim(fgets(STDIN));
            
            $personaAgregada= new persona($agregarNombre,$agregarApellido,$agregarDni,$agregarTelefono);
            
            $agregar= $viaje->agregarPasajero($personaAgregada);

            if ($agregar==true){
                echo "Agregado con exito.";
            }
            else{
                echo "Operacion sin exito, es posible que el Pasajere ya este inscripto o el viaje este en su capacidad maxima.";
            }
            break;
        case '4':
            echo "Ingrese nombre: ";
            $nombreResponsableNuevo= trim(fgets(STDIN));
            echo "Ingrese Apellido: ";
            $apellidoResponsableNuevo= trim(fgets(STDIN));
            echo "Ingrese numero de empleado: ";
            $numEmpleadoNuevo= trim(fgets(STDIN));
            echo "Ingrese numero de licencia: ";
            $numLicienciaNuevo= trim(fgets(STDIN));

            $nuevoResponsable= new responsableV($nombreResponsableNuevo,$apellidoResponsableNuevo,$numEmpleadoNuevo,$numLicienciaNuevo);
            $modificarResponsable = $viaje ->modificarResponsable($nuevoResponsable);
            echo "Operacion realizada con exito";

            break;
       
    }
} while ($i <> 5 );




?>