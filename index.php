<?
require('conexion2.php');
$conexion = new Conexion('localhost', 'root', 'admin');

echo 'Indice de prueba =(';

$resultado = Conexion->consulta('SELECT * FROM usuario');

while ($articulo = mysql_fetch_array($resultado) ) {
	echo ''.$articulo['nombre'] . "\n";
}
?>
