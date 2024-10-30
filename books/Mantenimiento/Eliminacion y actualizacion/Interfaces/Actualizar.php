<?php
/**
 * Pagina principal para actualizar datos de una tabla de forma dinamica
 * @author @trbureiyan
 * @version 0.4
 */

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Datos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
        h2 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        label {
            margin-bottom: 10px;
        }
        select, input[type="text"], button {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        // Función para cargar columnas de la tabla seleccionada
        function updateSelection(type) {
            const selectedTable = document.getElementById('table')?.value;

            if (type === 'table' && selectedTable) {
                // ... Sin alguna idea de como implementar esto
            }
        }

        // Función para mostrar el campo de entrada después de seleccionar una columna
        function showUpdateField() {
            
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Seleccione la tabla a actualizar</h2>
        <form action="Update.php" method="POST">
            <!-- Selección de tabla -->
            <label for="table">Tabla:</label>
            <select name="table" id="table" onchange="updateSelection('table')">
                <option value="">Seleccione una tabla</option>
                <option value="autores">autores</option>
                <option value="editores">editores</option>
                <option value="libros">libros</option>
                <option value="traductores">traductores</option>
            </select>

            <!-- Contenedor para el segundo desplegable de columnas -->
            <div id="column-container"></div>

            <!-- Campo de entrada para el valor de actualización -->
            <div id="update-field" style="display: none;">
                <label for="new_value">Nuevo Valor:</label>
                <input type="text" name="new_value" id="new_value" required>
                <button type="submit">Actualizar</button>
            </div>
        </form>
    </div>
</body>
</html>

