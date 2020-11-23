<?php

require './sendmail.php';

define ('TITLE','BIA | Contacto');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Bufete Industrial Ambiental es una empresa dedicada a proveer servicios profesionales de consultoría y auditoría ambiental para el sector empresarial.">
    <meta name="keywords" content="Bufete Industrial Ambiental, auditoria, asesoria, consuloria, relleno sanitario, ingenieria, conservacion, proteccion del medio ambiente">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,600;0,700;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
<?php include "header_nav.php" ?>
</header>
<main>
    <div class="container">
        <div class="d-flex flex-row">
            <div class="mx-auto col-8">
                <h1 class="">Contacto</h1>
                <p>Estamos atentos a tus preguntas y listos para proporcionarte la informacion que necesitas. Comunicate a traves de nuestras lineas telefonicas o envianos un mensaje llenando tus datos aqui debajo, un asesor se pondra en contacto a la brevedad.</p>
                <ul class="list-unstyled">
                    <li><h3>Numero Telefonico</h3></li>
                    <li><p>+52 (664)607-5211 y 5213</p></li>
                <!--<li><h3>Correo Electronico</h3></li>
                    <li><p>Escribe Tu mensaje</p></li> -->
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="col-8 mx-auto">
                <form method="POST">
                    <div class="row pb-3 ">
                        <div class="col">
                            <input type="text" class="form-control" name="fname"id="fname">
                        </div>
                            <div class="col">
                            <input type="text" class="form-control" name="lname" id="lnmae">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col">
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" value="1">
                              <label class="form-check-label" for="inlineCheckbox1">Calidad Turistica</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" value="2">
                              <label class="form-check-label" for="inlineCheckbox2">Industria Limpia</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" value="3">
                              <label class="form-check-label" for="inlineCheckbox3">Consultoria Ambiental</label>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col">
                            <textarea name="body" id="body"></textarea>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col">
                            <input type="submit" name="submit" class="btn btn-primary"></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
<pre>
<?= $status ?>
</pre>
</main>
<footer>
<?php include "page_footer.php" ?>
</footer>
<script src='jquery.validate.js'></script>
</body>
</html>
