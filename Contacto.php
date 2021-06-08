<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Leandro Martín Armoa</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/mediaqueries.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
		<script src="js/html5.js" type="text/javascript"></script>
		<link href="css/ie.css" rel="stylesheet" type="text/css" />
	<![endif]-->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>

</head>

<body>
    <!-- Inicio Header-->
    <?php
        include "includes/header.php";

    ?>

    <!-- fin Header-->

    <!-- inicio imagen -->
    <?php
        include "includes/slider.php";

    ?>
    
    <!-- fin imagen -->
    <!-- Start Middle-->
    <section id="container">
        <article class="pageControl pageWidth">
            <div class="pageContainer">
                <h2>Contactame</h2>
                <p>Para mas información:</p>
                <li>Email: l.martin.armoa@gmail.com</li>
                <li>Tel: 3764 000000</li><br><br>
                
                <p>Para conactarme también podes rellenar el siguiente formulario</p>
                <form action="enviar.php" method="post" class="form_contact">
                    <fieldset>
                        <ul>
                            <li>
                                <label for="name">Nombre</label>
                                <input type="text" id="names" name="name" required>
                            </li>
                            <li>
                                <label for="phone">Tel</label>
                                <input type="tel" id="phone" name="telefono">
                            </li>
                            <li>
                                <label for="email">Email</label>
                                <input type="text" id="email" name="correo" required>
                            </li>
                            <li>
                                <label for="mensaje">Mensaje</label>
                                <textarea id="mensaje" name="mensaje" required></textarea>
                            </li>
                            <li>
                                <input type="submit" value="Enviar mensaje">
                                <input type="reset" value="limpiar">
                            </li>                        
                        </ul>
                    </fieldset>
                </form>
            </div>
        </article>
    </section>
    <!-- End Middle-->
    <!-- Start Footer-->
    <?php
        include "includes/footer.php";

    ?>
    <!-- END Footer-->

</body>

</html>