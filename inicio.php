<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <title> Hotel Fujitaya </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="icon" href="imagenes/logo-Fujitaya2.png">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,400;0,800;1,400&family=Montserrat:ital,wght@0,400;0,600;1,200&display=swap" rel="stylesheet">
	
  <link rel="stylesheet" href="estilos/responsive.css">
  <link rel="stylesheet" href="estilos/bootstrap.css">
  <link rel="stylesheet" href="estilos/estilos.css">
  <link rel="stylesheet" href="estilos/grid.css">
 
</head>
<body>

<header class="header_section">
    <?php
    require_once('headerIndex.php')
    ?>
  </header>
<?php
    include('html/index.php'); 
    include('connection.php'); 

    $enlace = mysqli_connect("localhost","administrador","54321","fujitaya");

        if(!$enlace){
            die("No hay conexión a la bases de datos".mysql_error());
        }
        echo "Conexión exitosa";
        

    if (isset($_POST['reservar'])){
        if(strlen($_POST['name']) >= 1 &&
           strlen($_POST['email']) >= 1 &&
           strlen($_POST['phone']) >= 1 &&
           strlen($_POST['numberguests']) >= 1 &&
           strlen($_POST['date']) >= 1 &&
           strlen($_POST['time']) >= 1 &&
           strlen($_POST['message']) >= 1 ){

            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $numberguests = trim($_POST['numberguests']);
            $date = trim($_POST['date']);
            $formattedDate = date('Y/m/d', strtotime($date));
            $time = trim($_POST['time']);
            $message = trim($_POST['message']);
            
            $consulta = "INSERT INTO reservaciones( name, email, phone, numberguests, date, time, message) VALUES ('$name','$email','$phone','$numberguests','$date','$time','$message')";
            
            $resultado = mysqli_query($enlace,$consulta);

            if($resultado){
                ?>
                <h3 class="ok">¡Reservación exitosa!</h3>
                <script type="text/javascript"> alert("¡Reservación exitosa!")</script>
                <?php
            } else {
                ?>
                <h3 class="bad">¡Ha ocurrido un error!</h3>
                <?php
            }
        } else {
            ?>
            <h3 class="bad">¡Complete los campos!</h3>
            <?php
        }
    }mysqli_close($enlace);
?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <footer class="footer_section">
    <?php
    require_once('footer.php')
    ?>
  </footer>
	

