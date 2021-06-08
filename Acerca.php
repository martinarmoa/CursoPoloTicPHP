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
                <h2>Acerca de</h2>
                <p> Mi nombre es Leandro Martín Armoa, soy Ingeniero Químico, docente, relacionado a la informática. Tengo algún conocimiento de programación en MATLAB. Así que decidí reforzar esta área dentro de mis conocimientos aprendiendo
                    un poco de desarrllo web. He estado estudiando conceptos básicos de Python, HTML y CSS. Esta página será mi primer intento de poner a prueba mis habilidades en este curso de desarrollo web conPHP.</p>
                <h2>Algo mas</h2>
                <p>Tal vez escriba algo mas adelante por aquí..Phasellus eleifend venenatis leo, nec ultrices leo adipiscing vitae. Duis quis volutpat purus. Mauris mattis metus eleifend sapien venenatis ornare. Aenean id mauris sed lacus blandit tempus. Quisque scelerisque aliquam auctor. Pellentesque
                    nec velit ac sapien pharetra rutrum.</p>
                <ul>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet</li>
                </ul>
                <ol>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet</li>
                </ol>
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