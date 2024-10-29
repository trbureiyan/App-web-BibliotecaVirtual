<?php

/**
 * Aplicacion de ingreso de libros
 * @author @trbureiyan
 * @version 1.2.1 // asegurado contra sql injection
 */

    //realizamos una conexion al servidor
    include "../../../includes/conexion.php";

    // Declaramos las variables que se utilizarán para insertar los datos en la tabla
    $Titulo        = $_POST['Titulo'];
    $Tipo          = $_POST['Tipo'];
    $genero        = $_POST['genero'];
    $ID_autor      = $_POST['ID_autor'];
    $ID_editor     = $_POST['ID_editor'];
    $ID_traductor  = $_POST['ID_traductor'];

    // Usamos prepared statements para evitar SQL Injection
    $stmt = $conn->prepare("INSERT INTO libros (Titulo, Tipo, genero, ID_autor, ID_editor, ID_traductor) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $Titulo, $Tipo, $genero, $ID_autor, $ID_editor, $ID_traductor);

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
