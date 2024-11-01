<?php

if ($_POST) {

    $ValorA= $_POST ['ValorA'];
    $ValorB= $_POST ['ValorB'];
    
    $suma= $ValorA+$ValorB;
    $resta= $ValorA-$ValorB;
    $division= $ValorA/$ValorB;
    $multiplicacion= $ValorA*$ValorB;
    echo "<br>".$suma;
    echo "<br>".$resta;
    echo "<br>".$division;
    echo "<br>".$multiplicacion;
   

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
    
    <form action="ejercicio8.php" method="post">

    Valor A:
    <input type="text" name="ValorA" id="">
    <br>
    
    Valor B:
    <input type="text" name="ValorB" id="">
    <br>

    <input type="submit" value="calcular" id="">


    </form>



</body>
</html>