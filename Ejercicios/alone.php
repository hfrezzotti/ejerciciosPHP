<?php

class Persona {
    public $name;
    public $apellido;
    public $key;

    public function nuevoNombre($crearNombre) {
        $this->name = $crearNombre;
        return $this->name;
    }

    public function nuevoApellido($crearApellido) {
        $this->apellido = $crearApellido;
        return $this->apellido;
    }

    public function nuevoKey($crearKey) {
        $this->key = (string)$crearKey; // Convertir a cadena
        return $this->key;
    }
}

$clara = new Persona;
$clara->nuevoNombre("Clara");
$clara->nuevoApellido("Dominguez");
$clara->nuevoKey(12345678);

$martin = new Persona;
$martin->nuevoNombre("Martin");
$martin->nuevoApellido("Dona");
$martin->nuevoKey(11223344);

$nicolas = new Persona;
$nicolas->nuevoNombre("Nicolas");
$nicolas->nuevoApellido("Brito");
$nicolas->nuevoKey(44556677);

// Definir constantes después de instanciar las personas
define("CLAVE_UNICA_CLARA", $clara->key);
define("CLAVE_UNICA_MARTIN", $martin->key);
define("CLAVE_UNICA_NICOLAS", $nicolas->key);

$nombreCliente = $_POST['nombreCliente'] ?? ''; // Manejo de errores en caso de que no se envíe el formulario
$clave1 = $_POST['clave1'] ?? '';

if ($clave1 == CLAVE_UNICA_CLARA) {
    echo "Clave correcta, bienvenida " . $clara->name . " " . $clara->apellido;
} elseif ($clave1 == CLAVE_UNICA_MARTIN) {
    echo "Clave correcta, bienvenida " . $martin->name . " " . $martin->apellido;
} elseif ($clave1 == CLAVE_UNICA_NICOLAS) {
    echo "Clave correcta, bienvenida " . $nicolas->name . " " . $nicolas->apellido;
} else {
    echo "La clave ingresada no es correcta";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a su cajero</h1><br>
    <p>Introduzca su clave</p>
    <form action="alone.php" method="post">
        Introduzca su Nombre:
        <input type="text" name="nombreCliente" placeholder="Su nombre"><br>
        Clave:
        <input type="text" name="clave1" placeholder="8 dígitos numéricos"><br>
        Confirmar:
        <input type="submit" value="Enviar"><br>
    </form>

    <footer>
        <h2>Gracias por operar con nosotros.</h2>
    </footer>
</body>
</html>
