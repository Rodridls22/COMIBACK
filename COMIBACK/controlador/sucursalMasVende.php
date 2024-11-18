<?php
include "../modelo/connectionComidApp.php";

// Crear una instancia de la clase y obtener la conexión
$db = new DatabaseComidApp();
$conexion = $db->getConnection();

if (!$conexion) {
    die("Error: No se pudo establecer la conexión a la base de datos.");
}

// Ejecutar la consulta
$sql = $conexion->query("SELECT * FROM sucursalmasvende ");

while ($datos = $sql->fetch(PDO::FETCH_OBJ)) {
    echo "<tr>
    <td>{$datos->IDLocal}</td>

            <td>{$datos->NombreSucursal}</td>

            <td>{$datos->TotalVentas}</td>
        </tr>";
}
?>