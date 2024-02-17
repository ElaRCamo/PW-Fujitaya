<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Conexion MySQL</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		$enlace = mysqli_connect("localhost","administrador","54321","fujitaya");

		if(!$enlace){
			die("No hay conexión a la bases de datos".mysql_error());
		}
		echo "Conexión exitosa";
		mysqli_close($enlace);
	?>
</body>
</html>