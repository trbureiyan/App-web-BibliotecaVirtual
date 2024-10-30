<?php

/**
 * Esta es la página principal de la aplicación
 * Proporciona un menú con enlaces a las diferentes partes de la aplicación
 * @author @trbureiyan & Miller Cercera Garcia
 * @version 1.3.4
 */
?>

<!-- Código HTML principal de la página -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"; charset="iso-8859-1">
    <title>Biblioteca Virtual de Libros</title>
    <!-- Establece el título de la página como "Biblioteca Virtual de Libros" -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
 
    <style>
        /* General */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background: url('resources/images/fondo.webp') no-repeat center center fixed;
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

        /* Navbar */
        nav {
            display: flex;
            justify-content: center;
            background: rgba(73, 80, 87, 0.9);
            padding: 10px;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 15px;
        }
        nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 1em;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: background 0.3s ease;
        }
        nav ul li a:hover {
            background-color: #6c757d;
            border-radius: 5px;
        }

        /* Modal Menu */
        #modalMenu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
            z-index: 2000;
        }
        #modalMenuContent {
            background-color: #f8f9fa;
            width: 80%;
            max-width: 500px;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        #modalMenuContent h2 {
            color: #343a40;
            margin-bottom: 25px;
        }
        .close-btn {
            color: #343a40;
            float: right;
            font-size: 1.5em;
            cursor: pointer;
        }
        .category-list {
            list-style: none;
            padding: 0;
            display: flex;
            flex-direction: column;
            gap: 15px;
            font-size: 1em;
        }
        .category-item {
            padding: 1.5px 3.5px;
            background: #495057;
            color: #fff;
            border-radius: 7px;
            text-align: left;
        }
        .category-list li {
            margin-bottom: 10px;
            margin-top: 10px; /* Espacio entre los elementos de la lista */
        }
        .category-item:hover {
            background-color: #6c757d;
        }



    </style>
</head>
<body>
    <header>
        <img src="resources/images/icon.svg" alt="Logo de Biblioteca Virtual">
        <h1>Biblioteca Virtual de Libros</h1> 
    </header>
    <nav>
        <ul>
            <li><a href="#"><i class="fas fa-book"></i>Inicio</a></li>
            <li><a href="#" onclick="showModalMenu()"><i class="fas fa-folder"></i>Categorías</a></li>
            <li><a href="https://www.bento.me/trbureiyan"><i class="fas fa-user"></i>Perfil</a></li>
            <li><a href="configuracion.php"><i class="fas fa-cog"></i>Configuración</a></li>
        </ul>
    </nav>

    <!-- Modal Menu for Categories -->
    <div id="modalMenu">
        <div id="modalMenuContent">
            <span class="close-btn" onclick="hideModalMenu()">&times;</span>
            <h2>Categorías</h2>
            <ul class="category-list">
                <li class="category-item"><b>Mantenimiento</b>
                    <ul>
                        <li><a href="Mantenimiento/Ingresos/Interfaces/autores.php" class="category-item">Autores</a></li> 
                        <li><a href="Mantenimiento/Ingresos/Interfaces/editores.php" class="category-item">Editores</a></li>
                        <li><a href="Mantenimiento/Ingresos/Interfaces/libros.php" class="category-item">Libros</a></li>
                        <li><a href="Mantenimiento/Ingresos/Interfaces/traductores.php" class="category-item">Traductores</a></li>
                        <li><a href="Mantenimiento/Eliminacion y actualizacion/Interfaces/Eliminar.php" class="category-item">Eliminación</a></li>
                        <li><a href="Mantenimiento/Eliminacion y actualizacion/Interfaces/Actualizar.php" class="category-item">Actualización</a></li>
                    </ul>
                </li>
                <li class="category-item"><b>Informes</b>
                    <ul>
                        <li><a href="#" class="category-item">INFORME DE CLIENTES</a></li>
                        <li><a href="#" class="category-item">INFORME DE CODEUDORES NO DEUDORES</a></li>
                        <li><a href="#" class="category-item">INFORME DE CLIENTES EXCEL</a></li>
                        <li><a href="#" class="category-item">INFORME DETALLADO</a></li>
                        <li><a href="#" class="category-item">INFORME GENERAL</a></li>
                    </ul>
                </li>
                <li class="category-item"><b>Vistas</b>
                    <ul>
                        <li><a href="#" class="category-item">CLIENTES</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <script>
        function toggleMenu() {
            document.querySelector('nav').classList.toggle('active');
        }

        function showModalMenu() {
            document.getElementById('modalMenu').style.display = 'flex';
        }

        function hideModalMenu() {
            document.getElementById('modalMenu').style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target == document.getElementById('modalMenu')) {
                hideModalMenu();
            }
        }
    </script>
</body>

</html>
