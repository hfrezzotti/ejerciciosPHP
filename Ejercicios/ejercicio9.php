<?php

if ($_POST){

  $valorA=$_POST['ValorA'];
  $valorB=$_POST['ValorB'];

   if ($valorA > $valorB ) {
        echo 'El valor es mayor';
   } else {
    echo 'El valor es menor';
   }

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

    <form action="ejercicio9.php" method="post">

    ValorA:
    <input type="text" name="ValorA">
    <br>
    ValorB:
    <input type="text" name="ValorB">
    <br>
    <input type="submit" value="Enviar">


    </form>

    
</body>
</html>