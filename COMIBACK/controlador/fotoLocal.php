<?php
require_once "../modelo/connectionComidApp.php"; // Incluye el archivo de conexión

$db = new DatabaseComidApp();
$conexion = $db->getConnection();

// Consulta a la base de datos para obtener las sucursales
$query = "SELECT * FROM local"; // Ajusta los nombres según tu base de datos
$resultado = $conexion->query($query);

// Almacena los resultados en un arreglo para pasarlos a la vista
$sucursales = $resultado->fetchAll(PDO::FETCH_ASSOC);

