<?php

/**
 * Esta es la página principal de las vistas de autores.
 * Proporciona un menú de opciones para elegir que columnas ver en la tabla de autores para luego mostrarla.
 * @author @trbureiyan
 * @version 1.0
 */

 include "../includes/conexion.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Vista de Autores</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<style>
        /* General */
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
        div.Encabezado {
            background-color: #343a40;
            font-size: 2em;
            text-align: center;
            font-weight: bold;
        }
        
    </style>

<header>
    <nav>
		<div class="Encabezado">
			<a class="Titulo">Vista de Autores</a>
		</div>
	</nav>
</header>

<body>
	<div class="container">
		<h4>Columnas a mostrar:</h4>
		<form action=" " method="POST">
			<select name="columnas" class="browser-default" required>
				<option value="">Seleccione columnas</option>
				<option value="Nombre">Nombre</option>
				<option value="Apellidos">Apellidos</option>
				<option value="telefono">Telefono</option>
				<option value="correo">Correo</option>
				<option value="Nombre, Apellidos, telefono, correo">Todas</option>
			</select>
			<button type="submit" class="waves-effect waves-light btn">Mostrar</button>
		</form>
	</div>
    <?php
    if (isset($_POST['columnas'])) {
        $columnas = $_POST['columnas'];
        if (empty($columnas)) {
            echo "<p>Error: Debe seleccionar al menos una columna.</p>";
        } else {
            $columnasArray = explode(", ", $columnas);
            $query = "SELECT " . implode(", ", $columnasArray) . " FROM autores ORDER BY ID_autores ASC";
            $result = $conn->query($query);
            if ($result) {
                echo "<table class='highlight'>";
                echo "<thead>";
                echo "<tr>";
                foreach ($columnasArray as $columna) {
                    echo "<th>$columna</th>";
                }
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while ($fila = $result->fetch_assoc()) {
                    echo "<tr>";
                    foreach ($columnasArray as $columna) {
                        echo "<td>" . $fila[$columna] . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p>Error al consultar: " . $conn->error . "</p>";
            }
        }
        $conn->close();
    }
    ?>
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
