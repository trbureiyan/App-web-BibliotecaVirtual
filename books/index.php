<?php

/**
 * Esta es la página principal de la aplicación
 * Proporciona un menú con enlaces a las diferentes partes de la aplicación
 * @author @trbureiyan & Miller Cercera Garcia
 * @version 1.2.1
 */
?>

<!-- Código HTML principal de la página -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Establece el XHTML de la página -->


<!-- Estilo que cambia y establece la fuente de la letra -->
    <style type="text/css">
    body {
        font-family: 'HYWenHei-85W';
    }
    </style>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Biblioteca Virtual de Libros</title> 
<!-- Establece el título de la página como "Biblioteca Virtual de Libros" -->
 
<link rel="stylesheet" href="menuindex_files/css3menu1/style.css" type="text/css" />
<!-- Establece link a un archivo CSS para el menú -->

<!-- Establece un estilo para el menú -->
<style type="text/css">
	/*Este es el código CSS para el fondo de la página*/
	body { 
		/*Establece la imagen de fondo de la página en una imagen determinada*/
		background-image: url(resources/images/icon.svg); 
		/*Establece la repetición de la imagen de fondo en no repetir*/
		background-repeat: no-repeat;
		/*Establece la posición de la imagen de fondo en centrado centrado*/
		background-position:right center;
		/*Establece el tamaño de la imagen de fondo en 500px por 500px*/
		background-size:500px 500px;
	}
</style>

</head>

<!--- Establece el bodie de la página en un estilo determinado -->
<body>
	<right><h1>SOFTWARE DE BOOK</h1></right>
	<right><H2>Trabajo Practica en PHP</H2></right>
	
    <!--- Establece el menú de la página -->
	<ul id="css3menu1" class="topmenu">
    <!--<li><a href="">Inicio</a></li>-->
    <li class="topfirst"><a href="index.php" >INICIO</a>
	
    <li class="topmenu">MANTENIMIENTO
        <ul>
            <li class="topmenu"><a href="Mantenimiento/autores.php?pag=mto_ef">Autores</a></li>
            <li class="topmenu"><a href="Mantenimiento/editores.php?pag=mto_ef" >Editores</a></li>
            <li class="topmenu"><a href="Mantenimiento/traductores.php?pag=mto_ef" >Traductores</a></li>
            <li class="topmenu"><a href="Mantenimiento/libros.php?pag=mto_ef" >Libros</a></li>

            <!-- <li class="topmenu"><a href="pag_codeudor.php?pag=mto_ef">CODEUDOR</a></li>
            <li class="topmenu"><a href="pag_lineas.php?pag=mto_ef" >LINEAS CREDITOS</a></li>
            <li class="topmenu"><a href="pag_creditos.php?pag=mto_ef" >GENERAR CREDITOS</a></li>
            <li class="topmenu"><a href="list_creditos.php?pag=mto_ef" >CREDITOS</a></li> -->
        </ul>
    </li>
     <li class="topmenu">REPORTES
        <ul>
            <li class="topmenu"><a href="" >INFORME DE CLIENTES</a></li>
            <li class="topmenu"><a href="" >INFORME DE CODEUDORES NO DEUDORES</a></li>
            <li class="topmenu"><a href="" >INFORME DE CLIENTES EXCEL</a></li>
            <li class="topmenu"><a href="" >INFORME DETALLADO</a></li>
            <li class="topmenu">INFORME GENERAL</li>
			<ul><li class="topmenu"><a href="">CLIENTES</a></li>
			<li class="topmenu"><a href="">CREDITOS</a></li></ul>
        </ul>
    </li> 
    </li>
</ul>
<br />
	
</body>
</html>