<?php


class Persona { //creación de objeto persona

    public $nombre; //atributo publico
    private $edad; //atributo privado puede ser impreso con un return en método
    protected $altura; //atributo protegido solo puede ser heredado

    public function asignarNombre ($nuevoNombre)  {

        $this->nombre=$nuevoNombre;
        
    }

    public function imprimirNombre () {

        echo "Hola soy ".$this->nombre;
    }

    public function mostrarEdad () {

        $this->edad= 90;
        return $this->edad;
    }



}

$objAlumno= new Persona();
$objAlumno->asignarNombre("Hernan");

$objAlumno2= new Persona();
$objAlumno2->asignarNombre("Martin");
$objAlumno2->imprimirNombre();

$objAlumno3= new Persona();
echo $objAlumno3->mostrarEdad();




?>