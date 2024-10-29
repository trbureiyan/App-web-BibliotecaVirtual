<?php

/**
 * Aplicacion de ingreso de autor
 * @author @trbureiyan & Miller Cercera Garcia
 * @version 1.2.1
 */

    //realizamos una conexion al servidor
    include "../../../includes/conexion.php";

    // Verificamos si hay conexión
    if($conn->connect_error){
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Declaramos las variables que se utilizarán para insertar los datos en la tabla
    $Nombre     = $_POST['Nombre'];
    $Apellidos  = $_POST['Apellidos'];
    $telefono   = $_POST['telefono'];
    $correo     = $_POST['correo'];

    // Usamos prepared statements para evitar SQL Injection
    $stmt = $conn->prepare("INSERT INTO autores (Nombre, Apellidos, telefono, correo) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $Nombre, $Apellidos, $telefono, $correo);

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
