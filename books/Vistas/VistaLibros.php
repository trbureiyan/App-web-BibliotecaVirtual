<?php
/**
 * Página de Vista de Libros
 * Permite visualizar, filtrar, y listar libros en una tabla.
 * @version 1.0
 * 
 */

include "../includes/conexion.php";

// Verificar si hay una selección de columnas para visualizar
$columnas = isset($_POST['columnas']) ? $_POST['columnas'] : '';

// Definir consulta base para la tabla de libros
$defaultColumns = ['Titulo', 'Tipo', 'genero', 'ID_autor', 'ID_editor', 'ID_traductor'];
$queryColumns = $columnas ? explode(", ", $columnas) : $defaultColumns;

$query = "SELECT " . implode(", ", $queryColumns) . " FROM libros ORDER BY ID_libro ASC";
$result = $conn->query($query);

// Me rindo en el INNER JOIN de las otras tablas para poder moestrar los datos de autores, editores, y traductores

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vista de Libros - Biblioteca Virtual</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fff;
            background-size: cover;
            color: #333;
        }

        /* Header */
        header {
            background-color: rgba(52, 58, 64, 0.8);
            color: #fff;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        header img {
            height: 40px;
            width: 40px;
            position: absolute;
            left: 20px;
        }
        header h1 {
            font-size: 1.8em;
            font-weight: bold;
            text-align: center;
        }
        .container {
            margin-top: 40px;
        }
        .btn-custom {
            margin-top: 15px;
            background-color: #4CAF50;
            color: white;
        }
        div.Encabezado {
            background-color: #343a40;
            font-size: 2em;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<header>
    <nav>
		<div class="Encabezado">
			<a class="Titulo">Vista de Autores</a>
		</div>
	</nav>
</header>

<body>

    <main class="container">
        <h4>Seleccionar Columnas a Visualizar</h4>
        <form method="POST" action="">
            <select name="columnas" class="browser-default" required>
                <option value="">Seleccione columnas</option>
                <option value="Titulo">Titulo</option>
                <option value="Tipo">Tipo</option>
                <option value="genero">Género</option>
                <option value="ID_autor">Autor</option>
                <option value="ID_editor">Editor</option>
                <option value="ID_traductor">Traductor</option>
                <option value="Titulo, Tipo, genero, ID_autor, ID_editor, ID_traductor">Todas</option>
            </select>
            <button type="submit" class="waves-effect waves-light btn btn-custom">Mostrar</button>
        </form>

        <?php if ($result && $result->num_rows > 0): ?>
            <table class="highlight responsive-table">
                <thead>
                    <tr>
                        <?php foreach ($queryColumns as $columna): ?>
                            <th><?= ucfirst($columna); ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($fila = $result->fetch_assoc()): ?>
                        <tr>
                            <?php foreach ($queryColumns as $columna): ?>
                                <td><?= htmlspecialchars($fila[$columna] ?? ''); ?></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No se encontraron resultados para las columnas seleccionadas.</p>
        <?php endif; ?>

    </main>

    <?php $conn->close(); ?>
</body>

<style>
    .btn-cancelar {
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s ease;
    }

    .btn-cancelar:active {
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
</style>
<input type="button" name="Cancelar" value="Cancelar" class="btn-cancelar" onClick="window.history.go(-1)">
</html>