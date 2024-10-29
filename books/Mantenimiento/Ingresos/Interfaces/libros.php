<?php
/**
 * Pagina principal para agregar datos de un libro
 * @author @trbureiyan
 * @version 1.3.5
 */

include "../../../includes/conexion.php";

$consulta = "SELECT * FROM autores ORDER BY ID_autores ASC";
$resultado_autores = $conn->query($consulta);

$consulta = "SELECT * FROM editores ORDER BY ID_editores ASC";
$resultado_editores = $conn->query($consulta);

$consulta = "SELECT * FROM traductores ORDER BY ID_traductores ASC";
$resultado_traductores = $conn->query($consulta);

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar Libro - Biblioteca Virtual de Libros</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f5f5f5;
    }
    .container {
        width: 500px;
        margin: 50px auto;
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }
    .form-group input {
        width: 90%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .form-group input:focus {
        outline: none;
        border-color: #666;
    }
    .btn {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .btn:hover {
        background-color: #45a049;
    }
    .btn:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
</style>
</head>


<body>
    <div class="container">
        <h2>Agregar Libro</h2>
        <form name="frm_libro" method="post" action="../Backend/ingreso_libros.php"> 
            <div class="form-group">
                <label for="Titulo">Titulo del libro:</label>
                <input type="text" name="Titulo" value="" id="" required>
            </div>
            <div class="form-group">
                <label for="Tipo">Tipo de libro:</label>
                <input type="text" name="Tipo" value="" id="" required>
            </div>
            <div class="form-group">
                <label for="genero">Genero literario:</label>
                <input type="text" name="genero" value="" id="" required>
            </div>
            <div class="form-group">
                <label for="ID_autor">Autor:</label>
                <select type="text" name="ID_autor" value="" id="" required>
                    <?php
                    while ($fila = $resultado_autores->fetch_assoc()) {
                        echo "<option value='".$fila['ID_autores']."'>".$fila['Nombre']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="ID_editor">Editor:</label>
                <select type="text" name="ID_editor" value="" id="" required>
                    <?php
                    while ($fila = $resultado_editores->fetch_assoc()) {
                        echo "<option value='".$fila['ID_editores']."'>".$fila['Nombre']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="ID_traductor">Traductor:</label>
                <select type="text" name="ID_traductor" value="" id="" required>
                    <?php
                    while ($fila = $resultado_traductores->fetch_assoc()) {
                        echo "<option value='".$fila['ID_traductores']."'>".$fila['Nombre']."</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn" name="submit" value="Enviar" onClick="">Enviar</button>
            <button type="reset" class="btn" name="Limpiar" value="Limpiar" onClick="">Limpiar</button>
            <button type="button" class="btn" name="Cancelar" value="Cancelar" onclick="window.history.go(-1)">Cancelar</button>
        </form>
    </div>
</body>
</html>
