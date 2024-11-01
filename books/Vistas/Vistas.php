<?php

/**
 * Esta es la página principal de las vistas.
 * Proporciona un menú con enlaces o redirecciones a las diferentes vistas (Tablas) de la base de datos. 
 * @author @trbureiyan
 * @version 0.6
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"; charset="iso-8859-1">
    <title>Menu de Vistas</title>
    <!-- Establece el título de la página como "Biblioteca Virtual de Libros" -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
 
    <style>
        body {
            background: url('../resources/images/VistasBackground.webp');
            background-size: cover;
        }
        nav {
            background-color: #343a40;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-size: 1.2em;
            padding: 10px;
        }
        nav a:hover {
            background-color: #6c757d;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="./VistaAutores.php"><b>Autores</b></a>
        <a href="./VistaEditores.php"><b>Editores</b></a>
        <a href="./VistaLibros.php"><b>Libros</b></a>
        <a href="./VistaTraductores.php"><b>Traductores</b></a>
    </nav>
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
