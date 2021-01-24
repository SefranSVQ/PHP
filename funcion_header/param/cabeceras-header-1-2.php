<?php
$nombre= "Juan";
header("Location:cabeceras-header-1-3.php?nombre=$nombre&edad=25");

print "<p>Esta es la página 2</p>";

print "<p>La redirección <strong>NO</strong> se ha realizado</p>";

print "<p><a href=\"cabeceras-header-1-1.php\">Volver a la página 1</a></p>";
?>