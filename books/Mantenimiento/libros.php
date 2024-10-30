<?php
/**
 * Pagina principal para agregar datos de un libro
 * @author @trbureiyan
 * @version 1.3
 */

include "../includes/conexion.php";

$consulta = "SELECT * FROM autores ORDER BY ID_autores ASC";
$resultado_autores = $conn->query($consulta);

$consulta = "SELECT * FROM editores ORDER BY ID_editores ASC";
$resultado_editores = $conn->query($consulta);

$consulta = "SELECT * FROM traductores ORDER BY ID_traductores ASC";
$resultado_traductores = $conn->query($consulta);

?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar Libro - Biblioteca Virtual de Libros</title>
</head>


<!-- Estilo que cambia y establece la fuente de la letra -->
<style type="text/css">
    body {
        font-family: 'HYWenHei-85W';
    }
    </style>


<body>
 <!-- Menu -->
<div align="center"><br><br>
      <div align="center" class="style1">Agregar Libro </div>
   <br><br>
             <!-- Pagina para agregar autor -->
      <form name="frm_autor" method="post" action="Ingresos/ingreso_libros.php">
      <table width="497" border="1">
    <!-- Variables e inputs -->
         <tr>
           <td>Nombre/Titulo del libro:</td>
           <td><input type="text" name="Titulo" value="" id=""></td>
            </tr>
         <tr>
           <td>Tipo de libro:</td>
           <td><input type="text" name="Tipo" value="" id=""></td>
            </tr>
                  <tr>
           <td>Genero literario:</td>
           <td><input type="text" name="genero" value="" id=""></td>
            </tr>
               <tr>
           <td>Autor:</td>
           <td>
            <select type="text" name="ID_autor" value="" id="">
                   <?php
                   while ($fila = $resultado_autores->fetch_assoc()) {
                    echo "<option value='".$fila['ID_autores']."'>".$fila['Nombre']."</option>";
                   }
                   ?>
            </select>
           </td>
            </tr>
               <tr>
           <td>Editor:</td>
           <td>
            <select type="text" name="ID_editor" value="" id="">
                   <?php
                   while ($fila = $resultado_editores->fetch_assoc()) {
                    echo "<option value='".$fila['ID_editores']."'>".$fila['Nombre']."</option>";
                   }
                   ?>
            </select>
           </td>
            </tr>
               <tr>
           <td>Traductor:</td>
           <td>
            <select type="text" name="ID_traductor" value="" id="">
                   <?php
                   while ($fila = $resultado_traductores->fetch_assoc()) {
                    echo "<option value='".$fila['ID_traductores']."'>".$fila['Nombre']."</option>";
                   }
                   ?>
            </select>
           </td>
            </tr>
      
    <tr>
     <td colspan="2"><div align="center">
       <input type="submit" name="submit" value="Enviar" onClick="">
       <input type="reset" name="Limpiar" value="Limpiar" class="" onClick="">
       <input type="button" name="Cancelar" value="Cancelar" class="" onClick="window.history.go(-1)">
       </div></td>
    </tr>
   </table>
     </form>
</body>
</html>
