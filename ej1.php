<?php
echo 'Ahoramismo:'. date('Y-m-d') ."<br>";
echo "ayer es:".date("Y-m-d",strtotime("-1 day")), "<br>";
echo "El mes pasado:".date("Y-m-d",strtotime("last month"))."<br>";

date_default_timezone_set("UTC");
$timestamp = date('Y-m-d');
$daysInMonth = (int)date('t', strtotime($timestamp));
$thisDayInMonth = (int)date('j', strtotime($timestamp));
echo " Este mes queda ";
echo $daysRemaining = $daysInMonth - $thisDayInMonth;
echo "dias","<br>";

echo 'Este anyo queda' . 12-date('m') .'meses';
?>
<?php include "ej2.php" ?>



