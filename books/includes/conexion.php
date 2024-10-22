<?php

/**
 * Esta es la logica principal de conexion y sesion con la base de datos de la aplicación
 * @author @trbureiyan & Miller Cercera Garcia
 * @version 1.1 // comentado y explicado
 */

    // Definimos el nombre del servidor como localhost, que es el servidor local por defecto en la mayoría de los sistemas.
	$servername = "localhost"; // 127.0.0.1 // Esto se hace para especificar la ubicación del servidor de la base de datos.
	
	// Establecemos el nombre de usuario como root, que es el usuario administrador por defecto en la mayoría de los sistemas.
	$username = "root"; // Esto se hace para autenticar al usuario OLTP en la base de datos que realizará la conexión a la base de datos.
	
	// No se establece una contraseña para la conexión a la base de datos, lo que significa que la conexión es abierta y no segura.
	$password = ""; // Esto se hace para especificar la contraseña del usuario OLTP en la base de datos, aunque en este caso no se utiliza.
	
	// Especificamos el nombre de la base de datos como agenda2, que es la base de datos que se utilizará para almacenar los datos.
	$dbname = "libros"; // libros es la base de datos que se utilizará para almacenar los datos.

	// Creamos un nuevo objeto de conexión MySQLi con el servidor, usuario, contraseña y nombre de la base de datos.
	$conn = new mysqli($servername, $username, $password, $dbname); // Creamos un nuevo objeto de conexión MySQLi.
	// Esto se hace para seleccionar la base de datos que se utilizará para realizar operaciones.

	// Verificamos si la conexión a la base de datos fue exitosa.
	if ($conn->connect_error) { 
	    // Si la conexión falló, mostramos un mensaje de error con la razón.
	    die("Conexión fallida: " . $conn->connect_error);
	} else {
	    // Si la conexión fue exitosa, podemos realizar operaciones con la base de datos.
	    echo "Conexión exitosa";
	}
?>