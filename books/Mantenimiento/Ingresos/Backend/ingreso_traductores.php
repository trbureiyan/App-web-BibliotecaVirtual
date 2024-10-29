<?php

/**
 * Aplicacion de ingreso de traductores
 * @author @trbureiyan
 * @version 1.3.1
 */

    //realizamos una conexion al servidor
    include "../../../includes/conexion.php";

    // Verificamos si hay conexión
    if($conn->connect_error){
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Declaramos las variables que se utilizarán para insertar los datos en la tabla
    $Nombre             = $_POST['Nombre'];
    $Apellidos          = $_POST['Apellidos'];
    $idioma_nativo      = $_POST['idioma_nativo'];
    $idiomas_traduccion = $_POST['idiomas_traduccion'];
    $certificaciones    = $_POST['certificaciones'];

    // Usamos prepared statements para evitar SQL Injection
    $stmt = $conn->prepare("INSERT INTO traductores (Nombre, Apellidos, idioma_nativo, idiomas_traduccion, certificaciones) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $Nombre, $Apellidos, $idioma_nativo, $idiomas_traduccion, $certificaciones); 

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
