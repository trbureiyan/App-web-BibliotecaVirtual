<?php
/**
 * Pagina principal para agregar datos editor
 * @author @trbureiyan
 * @version 1.2
 */
?>

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar Editor - Biblioteca Virtual de Libros</title>
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
		    <div align="center" class="style1">Agregar Editor</div>
			<br><br>
													<!-- Pagina para agregar autor -->
		    <form name="frm_autor" method="post" action="Ingresos/ingreso_editores.php">
		    <table width="497" border="1">
				<!-- Variables e inputs -->
		      	<tr>
		        	<td>Nombre:</td>
		        	<td><input type="text" name="Nombre" value="" id=""></td>
	          	</tr>
		      	<tr>
		        	<td>Apellidos:</td>
		        	<td><input type="text" name="Apellidos" value="" id=""></td>
	          	</tr>
	          	<tr>
		        	<td>Nombre de editorial:</td>
		        	<td><input type="text" name="nombre_editorial" value="" id=""></td>
	          	</tr>
	          	<tr>
		        	<td>Pais:</td>
		        	<td><input type="text" name="pais" value="" id=""></td>
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
