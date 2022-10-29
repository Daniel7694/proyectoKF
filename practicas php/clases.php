<?php

class persona{

    public $nombre;
    private $edad;
    protected $altura; 


    public function asignarNombre ($nuevoNombre){

        $this->nombre=$nuevoNombre;
    }
    public function imprimirNombre(){

        echo "Holas soy ".$this->nombre;
    }
    public function mostrarEdad(){
        return $this->edad=20;
        return $this->edad;
    }
}


$objAlumno= new persona();
$objAlumno->asignarNombre("Oscar");

$objAlumno2 = new persona();
$objAlumno2->asignarNombre("pedro");
$objAlumno2->imprimirNombre();

echo$objAlumno2->mostrarEdad();

echo $objAlumno2->nombre;

echo $objAlumno->nombre;

?>