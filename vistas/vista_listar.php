<?php
include "cabecera.php";
echo "<table border='1'><tr><th>Nombre</th><th>Password</th></tr>";
foreach ($personas as $persona) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars(utf8_encode($persona['nombre'])) . "</td>";
    echo "<td>" . htmlspecialchars(utf8_encode($persona['password'])) . "</td>";
    echo "</tr>";
}
echo "</table>";
include "pie.php";
