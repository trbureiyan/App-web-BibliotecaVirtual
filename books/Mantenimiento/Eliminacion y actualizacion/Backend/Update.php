<?php

// get_columns.php

if (isset($_GET['table'])) {
    $tableName = $_GET['table'];

    include "../../includes/conexion.php";

    if ($conn) {
        $query = "SHOW COLUMNS FROM $tableName";
        $result = $conn->query($query);

        if ($result) {
            echo '<label for="column">Campo:</label>';
            echo '<select name="column" id="column" onchange="showUpdateField()">';
            echo '<option value="">Seleccione un campo</option>';

            while ($columnInfo = $result->fetch_assoc()) {
                // $columnName = $columnInfo I'm done with this...

                
                }
            }
        }
    }

?>