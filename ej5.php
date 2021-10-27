<?php
session_start();
$i = isset($_SESSION['i'])? $_SESSION['i'] : 0;
echo ++$i;
$_SESSION['i'] = $i;
?>

<html>
<head>
      <title>Exercise 4</title>
</head>
<body>
<p style="color:<?php echo $_POST['color']; ?>;font-family: <?php echo $_POST["fuente"]; ?>;font-size: <?php echo $_POST["fuente"]; ?>.</p>
<?php

include "ej2.php";
$color=$_POST["color"];
$fuente=$_POST["fuente"];
$tamanio=$_POST["tamanio"];
$texto=$_POST['texto']
$cookie=$_POST['cookie'];

if($cookie='on'){
      setcookie("color","$color");
      setcookie("fuente","$fuente");
      setcookie("tamanio","$tamanio");
      setcookie("texto","$texto");
      echo "$color,$fuente,$tamanio,$texto";
}
?>
