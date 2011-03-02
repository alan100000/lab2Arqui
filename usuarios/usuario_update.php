<?
require('conexion2.php');
$conexion = new Conexion('localhost', 'root', 'admin');
$id = $_POST['id'];
$nombre = $_POST['nombre'];

echo $id;
echo $nombre;

$conexion->consulta("UPDATE usuario SET nombre = '$nombre' WHERE usuario.id_usuario= '$id'");

echo "Se ha editado el usuario ".$nombre;
header("Location: .");
?>
