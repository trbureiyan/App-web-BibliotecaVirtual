<?php

/**
 * Pagina de ingreso de autor y conexion a la base de datos
 * @author @trbureiyan
 * @version 1.3 // asegurado contra sql injection
 */

    //realizamos una conexion al servidor
    include "../../includes/conexion.php";

    // Verificamos si hay conexión
    if($conn->connect_error){
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Declaramos las variables que se utilizarán para insertar los datos en la tabla
    $Nombre           = $_POST['Nombre'];
    $Apellidos        = $_POST['Apellidos'];
    $nombre_editorial = $_POST['nombre_editorial'];
    $pais             = $_POST['pais'];

    // Usamos prepared statements para evitar SQL Injection
    $stmt = $conn->prepare("INSERT INTO editores (Nombre, Apellidos, nombre_editorial, pais) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $Nombre, $Apellidos, $nombre_editorial, $pais); 

    if($stmt->execute()) {
        echo "<p>Se grabó un registro</p>";
        echo "<img src='resources/images/accept.png' alt='Registro exitoso'>";
    } else {
        echo "<p>Error al insertar: " . $stmt->error . "</p>";
        echo "<img src='resources/images/delete.png' alt='Error en el registro'>";
    }

    $stmt->close();
    $conn->close();
?>
