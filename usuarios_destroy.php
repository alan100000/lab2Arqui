<?
$resultado = $conexion->consulta("DELETE FROM usuario WHERE id_usuario=".$tokens[3]);
header("Location: ..");
?>

