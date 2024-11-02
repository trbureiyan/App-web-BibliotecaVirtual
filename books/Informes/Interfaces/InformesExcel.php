<?php

/*
 * Esta es la pagina principal para la generacion de informes en formato Excel.
 * @author @trbureiyan
 * @version 1.0
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Informes en Excel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <style>
            body {
                background-color: #f5f5f5;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .container {
                background-color: #fff;
                border-radius: 10px;
                padding: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h2 {
                text-align: center;
            }
            a {
                text-decoration: none;
                color: #000;
                background-color: #4CAF50;
                padding: 10px 20px;
                border-radius: 5px;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Informes en Excel</h2>
            <a href="../Backend/InformeGeneral.php">Descargar informe general</a>
            <a href="javascript:window.history.back()">Volver</a>
        </div>
