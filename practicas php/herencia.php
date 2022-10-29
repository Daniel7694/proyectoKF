<?php

class persona{

    public $nombre;//propiedad
    private $edad;//propiedad, privada
    protected $altura; //propiedad protejida

    public function asignarNombre ($nuevoNombre){

        $this->nombre=$nuevoNombre;
    }
    public function imprimirNombre(){

        echo "Hola soy ".$this->nombre;
    }
    public function mostrarEdad(){

        return $this->edad= 20;
        return $this->edad;
       
    }
}

class trabajador extends Persona{
   public $puesto;//nueva propiedad
   
   
   public function presentarseComotrabajador(){
      echo "hola soy ".$this->nombre.", y soy un ".$this->puesto;
     
   }
}


$objtrabajador = new trabajador();
$objtrabajador->asignarNombre("Oscar");
$objtrabajador->puesto="Profesor "; 

$objtrabajador->presentarseComotrabajador();


?>