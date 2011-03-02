<?
require('conexion2.php');
$conexion = new Conexion('localhost', 'root', 'admin');
$nombre = $_POST['nombre'];

$conexion->consulta("INSERT INTO usuario(nombre) VALUES ('$nombre') ");

echo "Se ha creado el usuario ".$nombre;
header("Location: .");
?>
