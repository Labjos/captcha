<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Captcha</title>
</head>

<body>
    <?php
$confirmacion = $_POST['confirmacion'];
if($confirmacion == $_SESSION['codigos'])
{
echo "<p>Codigo correcto</p>";
}else{
echo "<p>Error</p>";
}
?>
</body>

</html>