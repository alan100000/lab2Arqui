<?
$cont=1;
//require('conexion2.php');


$resultado = $conexion->consulta('SELECT * FROM usuario');

while ($articulo = mysql_fetch_array($resultado) ) {
	echo ''.$articulo['nombre'];
	
?>
	<a href="<?echo $articulo['id_usuario'] ?>">Show</a>
	<a href="<?echo $articulo['id_usuario'].'/edit' ?>">Editar</a>
	<a href="<?echo $articulo['id_usuario'].'/destroy' ?>">Destruir</a>
<br/>
<?
$cont++;
}
?>
<a href="new">Nuevo Usuario<a/>
