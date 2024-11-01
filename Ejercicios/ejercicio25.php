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

class Trabajador extends Persona {
    public $puesto;

    public function presentarseComoTrabajador () {
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }

}

$objTrabajador = new Trabajador();
$objTrabajador->asignarNombre("Lucas");
$objTrabajador->puesto="Profesor";
$objTrabajador->presentarseComoTrabajador();