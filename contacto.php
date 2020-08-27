<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BIA - Contacto</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
						<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,600;0,700;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-custom">
			<div class="container">
				<a class="navbar-brand nav-text" href="#">BIA</a>
				<ul class="nav justify-content-end">
					<li class="nav-item"><a class="nav-link text-right" href="index.php">Inicio</a></li>
<!-- 					<li class="nav-item"><a class="nav-link text-right" href="">Quienes Somos</a></li>
 -->				<li class="nav-item"><a class="nav-link text-right" href="servicios.php">Servicios</a></li>
<!-- 					<li class="nav-item"><a class="nav-link text-right" href="">Capacitaciones</a></li>
 -->				<li class="nav-item"><a class="nav-link text-right" href="contacto.php">Contacto</a></li>
				</ul>
			</div>		
		</nav>
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
<!-- 						<li><h3>Correo Electronico</h3></li>
						<li><p>Escribe Tu mensaje</p></li> -->
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<form id="contact-form" method="post" action="sendcontact.php" role="form">
						<div class="messages"></div>
						<div class="controls">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="form_name"></label>
										<input id="form_name" type="text" name="nombre" class="form-control" placeholder="Nombre *" required="required" data-error="Requerido">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="form_lastname"></label>
										<input id="form_lastname" type="text" name="apellido" class="form-control" placeholder="Apellido *" required="required" data-error="Requerido">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="form_email"></label>
										<input id="form_email" type="email" name="email" class="form-control" placeholder="Correo electronico *" required="required" data-error="Requerido">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="form_telephone"></label>
										<input id="form_telephone" type="tel" name="telephone" class="form-control" placeholder="Telefono *" required="required" data-error="Requerido">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12" >
									<div class="col-10 offset-1"><label for="form_message">Mensaje *</label></div>
									<div class="col-10 offset-1"><textarea name="message" id="form_message" placeholder="Maximo 240 caracteres" required="required" data-error="Es necesario escribir un mensaje" cols="96" rows="6"></textarea></div>
								</div>
								<div class="col-10 offset-1">
									<input type="submit" class="btn btn-success btn-send" value="Enviar">
								</div>
							</div>							
						</div>
					</form>
				</div>
			</div>
		</div>		

	</main>
	<footer>
	<div class="container ">
		<div class="pt-5 pb-5 row" id="footercontent">
			<div class="d-none d-lg-block col-lg-3 justify-content-center">
				<img class="picturesmall" src="images/footerimage.png" alt="">
			</div>
			<div class="d-flex col-12 col-lg-5 justify-content-center justify-content-lg-end">
				<ul class="footerliststyle">
					<li class="centercontent" ><h3 class="footerheader">Vinculos de Inter&#233s</h3></li>

					<li class="centercontent"><a class="" href="https://phatwhalemedia.myportfolio.com/"><a href="">BIA Noticias</a></a> </li>
					<li class="centercontent"><a class="" href="https://phatwhalemedia.myportfolio.com/"><a href="">Apoyo Tecnico</a></a> </li>
					<li class="centercontent"><a class="" href="https://phatwhalemedia.myportfolio.com/"><a href="">Confidencialidad<	/a></a> </li>
							
							<li class="centercontent"><h3 class="footerheader pt-3 pt-lg-2">Redes Sociales</h3></li>
							<li class="centercontent"><a class="centercontent" href="https://www.facebook.com/phatwhalemedia">facebook</a></li>
							<li class="centercontent"><a href="https://twitter.com/phatwhalemedia">twitter</a></li>	
					</ul>
					

					

			</div>
			<div class="d-flex col-12 col-lg-4 pt-3 pt-lg-0 justify-content-center justify-content-lg-end">
				<ul class="footerliststyle">
					<li class="centercontent"><h3 class="footerheader">BIA</h3></li>
					<li class="centercontent"><span class="footerinfo">Otay Universidad <br> Baja California, 22427</span></li>
					<li class="centercontent"><span class="footerinfo"><span><i class="fab fa-whatsapp"></i></span> +52 (664) 607-25-13</span></li>
					<li class="centercontent"><span class="footerinfo"><span><i class="far fa-envelope"></i></span> info@biaambiental.mx</span></li>

				</ul>
			</div>
		</div>

	</div>
		<div class="d-flex flex-row webmasterblock">
			<div class="col-12 text-center text-white mb-1">Design and Code by Phat Whale Media<sup>&copy;</sup>2020</div>
		</div>
</footer>
<script src="https://kit.fontawesome.com/a252fe7140.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>