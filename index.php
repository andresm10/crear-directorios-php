<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Crear carpetas en PHP</title>
<style>
	body{color:#FFF; font-family:Arial, Helvetica, sans-serif;}
</style>
</head>

<body bgcolor="#000000">
	<form method="post">
    <h1>Crear carpetas o directorios en PHP</h1>
    <h2>http://codigoweblibre.blogspot.com</h2>
	<?php 
		if(isset($_POST["crear"])){
			mkdir($_POST["nombre"], 755);
		}
	?>
    <label>Nombre de la carpeta</label>
    <input type="text" name="nombre" id="nombre" value="" />
    <input type="submit" name="crear" id="crear" value="Crear" />
    </form>
</body>
</html>