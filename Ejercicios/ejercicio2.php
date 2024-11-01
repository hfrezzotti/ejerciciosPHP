<?php
if ($_POST){
$nombre=$_POST['txtNombre'];
echo 'Hola'.$nombre;
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
    <h1>Captura en POst</h1>
    <form action="ejercicio2.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br>
        <input type="Submit" value="Enviar">
        </form>
</body>
</html>

