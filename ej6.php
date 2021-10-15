<?php

session_start();

if(isset($_COOKIE["hola"]))

{

$c=$_COOKIE["hola"];

echo $c++." nuevo visitores";

setcookie("hola",$c, time() + (86400 * 30));

}

else

{

         $c=0;

         setcookie("hola",$c, time() + (86400 * 30));

}

?>
