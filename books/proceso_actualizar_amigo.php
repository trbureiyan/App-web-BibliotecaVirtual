<?php
/**
 * @author @trbureiyan & Miller Cercera Garcia
 * @version 1.0
 */

	// Recuperamos los valores pasados por POST
	$nombre = $_REQUEST['nombre'];
	$cedula = $_REQUEST['documento'];
	$telefono = $_REQUEST['telefono'];
	$direccion = $_REQUEST['direccion'];

	// Incluimos la conexion a la base de datos
	include("includes/conexion.php");

	// Hacemos una consulta SQL preparada para actualizar los datos de la tabla basicos
	// con los nuevos valores
	$stmt = $conn->prepare("UPDATE basicos SET nombre=?, documento=?, telefono=?, direccion=? WHERE documento=?");
	$stmt->bind_param("sssss", $nombre, $cedula, $telefono, $direccion, $cedula);
	$stmt->execute();

	// Si la consulta se ejecuta correctamente, redirigimos a la pagina de clientes
	if ($stmt->affected_rows > 0) {
		header("location:../pag_cliente.php#clientes");
	} 
	else 
	{
		// En caso de error, mostramos un mensaje de alerta
	    echo"<script>alert('Opps Error insertando datos')</script>";
	}

	// Cerramos la conexion a la base de datos
	$stmt->close();
	$conn->close();
?>
