<?
	require ('conexion.php');	

	function indice() {
		$con = crear_conexion('localhost', 'root', 'admin');
		seleccionar_base('arqui_lab', $con);

		$resultado_consulta = consulta('SELECT * FROM usuario', $conexion);
		$usuarios = array();
		while($resultado = get_resultado($resultado_consulta)){
			$usuarios [] = $resultado;
		}
		
		cerrar_conexion($conexion);
		return $usuarios;
	}
?>
