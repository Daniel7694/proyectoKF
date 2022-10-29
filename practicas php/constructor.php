<?php

class personas{

    public $nombre;
    private $edad;
    protected $altura; 

    function __construct($nuevoNombre){

        $this->nombre=$nuevoNombre;

    }
    
    public function asignarNombre ($nuevoNombre){

        $this->nombre=$nuevoNombre;
    }
    public function imprimirNombre(){

        echo "Hola soy ".$this->nombre;
    }
    public function mostrarEdad(){
        return $this->edad=20;
        return $this->edad;
    }
}


$objAlumno= new personas("oscar");
//$objAlumno->asignarNombre("Oscar");
$objAlumno->imprimirNombre();


?>