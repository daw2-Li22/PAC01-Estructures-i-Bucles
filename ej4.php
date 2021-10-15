<?php
if (isset($_POST['colorchoice'])) {
$colorvalue =$_POST['colorchoice'];   
print "<span ><font color=".$colorvalue.">Hola</font></span>";
      }else{}    ?>
<form action="#" method=post>
<html>
<body>
<p>
selecionar color:
<input type="color" name="colorchoice" size="1"></br>
selecionar tipo de texto
<input type="text" >
</p>
<p>
<input type="submit" value="enviar"></form>
</p>
</body>
</html>