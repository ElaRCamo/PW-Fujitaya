<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <title> Hotel Fujitaya </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="icon" href="../imagenes/logo-Fujitaya2.png">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,400;0,800;1,400&family=Montserrat:ital,wght@0,400;0,600;1,200&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../estilos/explora.css">
    <link rel="stylesheet" href="../estilos/responsive.css">
    <link rel="stylesheet" href="../estilos/bootstrap.css">
    <link rel="stylesheet" href="../estilos/estilos.css">
    <link rel="stylesheet" href="../estilos/flex.css">

</head>
<body>

    <header class="header_section">
        <?php
        require_once('../headerBase.php')
        ?>
    </header>

    <?php
         include('../html/explora.html'); 
    ?>

    <footer class="footer_section">
        <?php
        require_once('../footer.php')
        ?>
    </footer>

</body>
</html>
