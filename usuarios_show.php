<?
$resultado = $conexion->consulta("SELECT * FROM usuario WHERE id_usuario=".$tokens[3]);


?>

	<h1> Info de usuario (show)</h1>
	<?
	while ($articulo = mysql_fetch_array($resultado) ) {
		echo 'El nombre del usuario es '.$articulo['nombre'];
	}
	?>
<br/>
<a href=".">Regresar</a>
