<?php

if ($_POST) {

    $boton=$_POST['btn'];

    switch ($boton) {
        case 1: echo "Usted presionó el 1";
        break;
        case 2: echo "Usted presionó el 2";
        break;
        case 3: echo "Usted presionó el 3";
        break;
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

    <form action="ejercicio13.php" method="post">

        <input type="submit" value="1" name="btn">
        <br>
        <input type="submit" value="2" name="btn">
        <br>
        <input type="submit" value="3" name="btn">
        <br>
        

    </form>
    
</body>
</html>