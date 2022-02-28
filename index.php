<?php
session_start(); // Iniciamos la sesion
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Captcha</title>
</head>

<body>
    <?php
$numero1= rand(0,9);
$numero2= rand(0,9);
$numero3= rand(0,9);
$minus = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","�","o","p","q","r","s","t","u","v","w","x","y","z");
$mayus = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","�","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$signos = array("!","#","$","%","&","=");

$generador_min = rand(0,26);
$generador_may = rand(0,26);
$generador_sig = rand(0,5);


$_SESSION["codigos"] = ($numero1).($minus[$generador_min]).($numero2).($mayus[$generador_may]).($signos[$generador_sig]).($numero3); // Guardamos el texto del CAPTCHA en la sesion
echo "<img src=imagen2.php>";
?>
    <form action="confirmacion2.php" method="post">
        <label>Escriba c�digo de seguridad: </label>
        <input name="confirmacion" type="text" id="confirmacion" />
        <input type="submit" name="Submit" value="Comprobar" />
    </form>



</body>

</html>