<?php 

/*
function sendEmail(){
if(!empty($_POST)){ 

$headers = 'From: reservas@foodhallrd.com';
mail('reservas@foodhallrd.com', 
'Reservacion Julieta Brasserie', 
'Enviado por:' . "\t" . $_POST['name'] . "\r\n" . 'Mensaje:'. "\t". $_POST['message'] .
"\n\rEmail: \t" . $_POST['email'],
$headers);
}
}*/

function sendEmail() {}

if(!empty($_POST)){
$url = 'https://www.google.com/recaptcha/api/siteverify';
$privatekey = "6Lf7_SQUAAAAAD9BFqhC_PFynQDgU59J1P7DTxsI";

$response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remonteip=".$_SERVER["REMOTE_ADDR"]);
$data = json_decode($response);

if (isset($data->success) && $data->success==true) {

$headers = 'From: reservaciones.foodhall@gmail.com';
mail('reservaciones.foodhall@gmail.com', 'Reservacion Julieta Brasserie', 
'Enviado por:' . "\t" . $_POST['name'] . "\r\n" . 'Mensaje:'. "\t". $_POST['message'] .
"\n\rEmail: \t" . $_POST['email'],
$headers);

}else{

}

}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Julieta Brasserie</title>
	<link rel="shortcut icon" href="#">

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="Ricardo Diaz" content="Julieta Brasserie">
	<meta name="description" content="Una brasserie europea de las manos del chef Erik Malmsten donde podrás disfrutrar de una cocina clásica y moderna. No te pierdas de nuestra famosa pizarra con los especiales del día en complemento de las exquisitas pizzas del horno de leña."/>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

	<!--Nav Bar     -->
	<nav class="fMenu" role="navigation">
		<div class="nav-wrapper container ">
			<a href="#" class="brand-logo">
				<img src="images/julietalogo.png" width="120px">
			</a>
			<ul class="right center hide-on-med-and-down light titulo11 ">
				<li><a href="#">INICIO</a></li>
				<li><a href="#nosotros">NOSOTROS</a></li>
				<li><a href="#menu">MEN&Uacute;</a></li>
				<li><a href="#galeria">GALERIA</a></li>
				<li><a href="#reservas">RESERVAS</a></li>
				<li><a href="#contacto">CONTACTO</a></li>
			</ul>

			<ul id="nav-mobile" class="right side-nav light titu">
				<li><a href="#">Inicio</a></li>
				<li><a href="#nosotros">Nosotros</a></li>
				<li><a href="#menu">Menú</a></li>
				<li><a href="#galeria">Galeria</a></li>
				<li><a href="#reservas">Reservas</a></li>
				<li><a href="#contacto">Contacto</a></li>
			</ul>

			<a href="#" data-activates="nav-mobile" class="button-collapse">
				<i class="material-icons">menu</i>
			</a>
		</div>

	</nav>
	<!--Nav Bar End -->

	<!--Fondo     -->
 <div class="col s12">
 	<div id="index-banner" class="parallax-container"> 
 		<div class="parallax"> 
 			<img src="images/imgCentral.png" > 
 		</div> 
 	</div> 
 </div>



	<!--Fondo End -->

	<!--About Us     -->
	<div class="fMenu scrollSpy white" itemscope itemtype ="https://schema.org/LocalBusiness">
		<div class="container ">
			<div class="section alto">
				<div class="row">
					
					<div  class="col s12 m10 l10 scrollspy" id="nosotros">
						<h2 class="white-text" style="margin-top: 1em;">NOSOTROS</h2>
						<p class="white-text light titulo nosFont"><span itemprop="name">
							<br>Somos una brasserie Europea, donde podrás disfrutar de una cocina clásica y moderna. Reconocido por sus desayunos, brunch y además un amplio menú de almuerzo y cena, Ideal para reuniones de trabajo en un lugar casual y relajado. 
						</p>
						<div class="row"></div>
						<div class="row"></div>
					</div>
					<div class="col s12 m2 l2">
						
					</div>


				</div>
			</div>
		</div>
	</div>

	<!--About Us End -->

	<!--Arte Promocion     -->
	<div class="row fMenu">
		<section>
			<div class="col s12 m12 l12 pad-col">
				<img  src="images/imageIndex2.png" class="responsive-img">
			</div>
		</section>

	</div>
	<!--Arte Promocion End -->
	
	<!--Menu  1   -->
	<div class="fMenu dPad">
		<div class="row">
			<section class="container">
				<h1 class="titulo mTop center white-text">MEN&Uacute;</h1>
			</section>	
		</div>


		<div class="black-text scrollspy fMenu" id="menu">

			<div class="container">
				<div class="row  scrollspy " id="galeria">

					<div class="col s12 m4 l4 ">

						<div class="card-image waves-effect">
							<a href="#modal1">
								<img class="responsive-img" src="./images/JugosPostres.png">
							</a>
						</div>

						<div id="modal1" class="modal">
							<div class="modal-content">
								<h4 class="center">JUGOS, POSTRES &amp; CAF&Eacute;</h4>

								<hr>
								<!-- DESSERT -->
								<div class="conteiner center">
									<p class="center">LIFE IS SHORT, EAT</p>
									<h2 class="center" style="margin-top: -.4em; margin-bottom: 0">DESSERT</h2>
									<p class="center" style="margin-top: -.4em">FIRST</p>

									<h5 class="center">THE MILKY WAY BROWNIE</h5>
									<p class="center" style="margin-top: -.4em">Oreo / Chocolate / Caramel Sauce / Marshmallows</p>
									<h5 class="center">ROASTED COCONUT CREAM PIE</h5>
									<p class="center" style="margin-top: -.4em">Caramel Cake / Coconut / Vanilla Cream</p>
									<h5 class="center">RED VELVET CHEESECAKE</h5>
									<p class="center" style="margin-top: -.4em">Chocolate Cake / Cheescake Cream / Merengue</p>
									<h5 class="center">PHILADELPHIA CARROT CAKE</h5>
									<p class="center" style="margin-top: -.4em">Philadelphia Cheese Frost / Nueces Mixtas / White Chocolate Sauce</p>
									<h5 class="center">CHURROS SLIDERS</h5>
									<p class="center" style="margin-top: -.4em">Vanilla Ice Cream / Fresas / Canela / Dulce de Leche</p>
									<h5 class="center">M&Aacute;RAMOL CHEESECAKE</h5>
									<p class="center" style="margin-top: -.4em">Cheesecake / Hersheys / Oreo / Dulce de Leche</p>
									<h5 class="center">DULCE TRES LECHES</h5>
									<p class="center" style="margin-top: -.4em">Sponge Cake / Merengue / Almendra Tostada</p>
									<h5 class="center">CL&Aacute;SICO FLAN CATAL&Aacute;N</h5>
								</div>
								<!-- DESSERT END -->
								<!-- COFFEE -->
								<div class="conteiner center">
								<div class="row"></div>
								<p class="center">WHEN LIFE GIVES YOU LEMONS, TRADE THEM FOR</p>
									<h2 class="center" style="margin-top: -.4em; margin-bottom: 0">COFFEE</h2>

									<div class="col l6 m6 s12">	
									<h5 class="center">FLAVORED LATTES</h5>
									<p class="center" style="margin-top: -.4em; margin-bottom: 0;">Caramelo</p>
									<p class="center" style="margin-top: -.4em; margin-bottom: 0;">Irish Cream</p>
									<p class="center" style="margin-top: -.4em; margin-bottom: 0;">Vainilla</p>
									<p class="center" style="margin-top: -.4em; margin-bottom: 0;">Almendra</p>
									<p class="center" style="margin-top: -.4em; margin-bottom: 0;">Avellana</p>
									<p class="center" style="margin-top: -.4em; margin-bottom: 0;">English Toffee</p>
									</div>

									<div class="col l6 m6 s12">	
									<h5 class="center">FRAPUCCINO</h5>
									<p class="center" style="margin-top: -.4em; margin-bottom: 0;">Caramelo</p>
									<p class="center" style="margin-top: -.4em; margin-bottom: 0;">White mocha</p>
									<p class="center" style="margin-top: -.4em; margin-bottom: 0;">Double Mocha</p>
									<p class="center" style="margin-top: -.4em; margin-bottom: 0;">Coffee Toffee</p>
									<p class="center" style="margin-top: -.4em; margin-bottom: 0;">Cookies n&#39;cream</p>
									<p class="center" style="visibility:hidden;margin-top: -.4em; margin-bottom: 0;">hola</p>
									</div>

									<div class="col l6 m6 s12">	
									<h5 class="center">CHAI</h5>
									<p class="center" style="margin-top: -.4em; margin-bottom: 0;">T&eacute; Chai (Fr&iacute;)</p>
									<p class="center" style="margin-top: -.4em; margin-bottom: 0;"> Chai Latte</p>									
									</div>

									<div class="col l6 m6 s12">	
									<h5 class="center">ICED</h5>
									<p class="center" style="margin-top: -.4em; margin-bottom: 0;">Latte Iced</p>
									<p class="center" style="margin-top: -.4em; margin-bottom: 0;"> Vainilla Iced</p>
									<p class="center" style="margin-top: -.4em; margin-bottom: 0;"> Choco Iced</p>

									</div>
								</div>
								<!-- COFFEE END -->
								<!-- LIQUORS -->
								<div class="conteiner center">
									
									<h2 class="center" style="margin-top: -.4em; margin-bottom: 0">LIQUORS</h2>
									<p class="center" style="margin-top: -.4em">MORE LIKE LIQUID SUNSHINE</p>

									<h5 class="center">LIMONCELLO</h5>
									<h5 class="center">RINQUINQUIN</h5>
									<h5 class="center">AMARO AVERNA</h5>
									<h5 class="center">SAMBUCA MOLINARI BLANCA</h5>
									<h5 class="center">SAMBUCA MOLINARI CAF&Eacute;</h5>
									<h5 class="center">AMARO NONINO</h5>
									<h5 class="center">GRAPPA NONINO VENDEMMIA BIANCA</h5>
									
								</div>
								<!-- LIQUORS END -->
								<!-- JUICE -->
								<div class="conteiner center">
								<div class="row"></div>
								<div class="row"></div>
									<p class="center">MY MIND SAYS: PANCAKES BUT MY BIKINI SAYS:</p>
									<h2 class="center" style="margin-top: -.4em; margin-bottom: 0">JUICE</h2>
									

									<h5 class="center">OUR FAVORITES</h5>
									<div class="col s6">
										<p class="center" style="margin-top: -.4em">NARANJA, ESPINACA, PIÑA</p>
										<p class="center" style="margin-top: -.4em">FRESA, LIM&Oacute;N, NARANJA</p>
										<p class="center" style="margin-top: -.4em">NARANJA, LIM&OacuteN, PIÑA</p>
										<p class="center" style="margin-top: -.4em">GUINEO Y FRESA</p>
									</div>
									<div class="col s6">
										<p class="center" style="margin-top: -.4em">PIÑA Y PEPINO</p>
										<p class="center" style="margin-top: -.4em">MANZANA, JENGIBRE, PIÑA</p>
										<p class="center" style="margin-top: -.4em">ZANAHORIA, NARANJA</p>
										<p class="center" style="margin-top: -.4em">FRESA, LIMÓN, APIO</p>
									</div>
								</div>
								<!-- JUICE END -->
								<!-- BUILD YOU -->
								<div class="conteiner center">
								<div class="row"></div>
								<div class="row"></div>
									
									<h2 class="center" style="margin-top: -.4em; margin-bottom: 0">BUILD YOUR OWN</h2>
									<p class="center">ELIGE 3 OPCIONES</p>
								
									<div class="col s6">
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">MEL&Oacute;N</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">MANGO</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">JENGIBRE</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">SANDIA</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">MENTA</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">APIO</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">COCO</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">LECHOZA</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">CHINOLA</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">LIM&Oacute;N</p>
									</div>
									<div class="col s6">
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">PIÑA</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">MANZANA</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">NARANJA</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">ESPINACA</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">TORONJA</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">GUINEO</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">ALBAHACA</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">FRESA</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">PEPINO</p>
										<p class="center" style="margin-top: -.4em;margin-bottom:0;">ZANAHORIA</p>
									</div>
								</div>
								<!-- BUILD END -->
								<!-- S.PELLEGRINO -->
								<div class="conteiner center">
								<div class="row"></div>
								<div class="row"></div>
									
									<h2 class="center" style="margin-top: -.4em; margin-bottom: 0">S.PELLEGRINO</h2>
									<p class="center" style="margin-top: -.4em">SPARKLING WATER</p>

									<h5 class="center">LIMONATA</h5>
									<h5 class="center">CLEMENTINA</h5>
									<h5 class="center">AMARO AVERNA</h5>
									<h5 class="center">ARANCIATA</h5>
									<h5 class="center">POMPELMO</h5>
									<h5 class="center">ARANCIATA ROSA</h5>
									<h5 class="center">MELOGRANO E ARANCIA</h5>
									
								</div>
								<!-- S.PELLEGRINO END -->
								<!-- TEA -->
								<div class="conteiner center">
								<div class="row"></div>
									<div class="row"></div>
									<h2 class="center" style="margin-top: -.4em; margin-bottom: 0">TEA</h2>
									<p class="center" style="margin-top: -.4em">A HG IN A CUP</p>

									<h5 class="center">ASSAM BLACK</h5>
									<h5 class="center">CHAI TEA</h5>
									<h5 class="center">LEMON LEAF</h5>
									<h5 class="center">JASMIN GREEN</h5>
									<h5 class="center">CHAMOMILE</h5>
									<h5 class="center">HAPPY TUMMY</h5>
									<h5 class="center">EVENING REPOSE</h5>
									<h5 class="center">RED ROOIBOS</h5>
									<h5 class="center">GREEN SENCHA</h5>
									<h5 class="center">WHITE PEONY</h5>
									
								</div>
								<!-- TEA END -->
							</div>

							<div class="modal-footer">
								<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
							</div>
						</div>

					</div>

					<div class="col s12 m4 l4 ">

						<div class="card-image waves-effect">
							<a class="" href="#modal2">
								<img class="responsive-img" src="./images/Desayunos.png">
							</a>
						</div>
						<div id="modal2" class="modal">
							<div class="modal-content">
								<h4 class="center">DESAYUNOS</h4>

								<hr>
								<!-- Frutas -->
								<div class="conteiner center">
									
									<h2 class="center">FRUIT AND CEREALS</h2>

									<h5 class="center">ENSALADA DE FRUTAS<br> DE TEMPORADA</h5>
									
									<h5 class="center">AVENA</h5>
									<p class="center" style="margin-top: -.4em">Con pasas</p>
									<h5 class="center">QUINOA &amp; YOGOURT BOWL</h5>
									<p class="center" style="margin-top: -.4em">Granola de Quinoa, Almendras, &amp; Fresas Deshidratadas / Yogurt Natural / Fresas Naturales</p>
									<h5 class="center">GRANOLA &amp; YOGURT BOWL</h5>
									<p class="center" style="margin-top: -.4em">Granola Cl&aacute;nola Hecha en Casa / Yogurt Natural / Fresas Naturales</p>
									
								</div>
								<!-- Frutas END -->
								<!-- EGG -->
								<div class="conteiner center">
									
									<h2 class="center">EGG FAVORITES</h2>

									<h5 class="center">EGG YOUR WAY</h5>
									<p class="center" style="margin-top: -.4em">Acompañado de Tostada &amp; su elecci&oacute;n de Jam&oacute;n o Bacon<br> - Revuelto - Frito - Hervido - Pochado -</p>
									<h5 class="center">2 EGGS BENEDICT</h5>
									<p class="center" style="margin-top: -.4em">Servido en Pan Brioche con Salsa Holandesa &amp; su elecci&oacute;n de 1 topping</p>
									<h5 class="center">3 EGGS - OMELETTE</h5>
									<p class="center" style="margin-top: -.4em">Acompañado de Tostada &amp; su elecci&oacute;n de 3 toppings <br> | Opci&oacuten s&oacute;lo clara de huevo |</p>
									<h5 class="center">3 EGGS - SCRAMBLED</h5>
									<p class="center" style="margin-top: -.4em">Acompañado de Tostada &amp; su elecci&oacute;n de 3 toppings <br> | Opci&oacute;n s&oacute;lo clara de huevo |</p>
									<h5 class="center">TOPPINGS</h5>
									<p class="center" style="margin-top: -.4em">- Tomate Proven&ccedil;al - Hongos Portobello - Salm&oacute;n Ahumado - Cottage Cheese - Espinaca - Chorizo - Mozarella - Queso Parmesano - Turkey bacon - Aged Cheddar - Queso Emmental - Jam&oacute;n - Bacon - Queso Muester - Salchicha Italiana - Pavo Ahumado - Papas Rostizadas -</p>
								</div>
								<!-- EGGs END -->
								<!-- BREAKFASTS SANDWICHES -->
								<div class="conteiner center">
									
									<h2 class="center">BREAKFASTS SANDWICHES</h2>

									<h5 class="center">CROISSANT</h5>
									<p class="center" style="margin-top: -.4em">Relleno con un 2 Egg Omellette de Jam&oacute;n &amp; Queso </p>
									<h5 class="center">SALM&Oacute;N BAGEL</h5>
									<p class="center" style="margin-top: -.4em">Salm&oacute;n Ahumado / R&uacute;cula / Crema Agria al Dij&oacute;</p>
									<h5 class="center">LAURA&#39;S GRILLED CHEESE</h5>
									<p class="center" style="margin-top: -.4em">Pan Brioche / Quesos Provolone, Comte &amp; Cheddar / Cebollas Caramelizadas. / Trufa</p>
									<h5 class="center">CROQUE MONSIEUR</h5>
									<p class="center" style="margin-top: -.4em">Jam&oacute;n Ahumado / Queso Emmental / Salsa Bechamel / Tomate / Mostaza Dij&oacute;n</p>
									<h5 class="center">CROQUE MADAME</h5>
									<p class="center" style="margin-top: -.4em">Jam&oacute;n Ahumado / Queso Emmental / Salsa Bechamel / tomate / Mostaza Dij&oacute;n / Huevo Frito</p>
									<h5 class="center">PITA REVUELTO</h5>
									<p class="center" style="margin-top: -.4em">Pan Pita / Queso Provolone / Huevo / Tomates / Espinacas / Jam&oacute;n de Pavo Ahumado</p>
									<h5 class="center">CROQUE JULIETA</h5>
									<p class="center" style="margin-top: -.4em">Pan de Cranberry, Nueces &amp; Pasas / Bacon / Fondue de Provolone / Tomate Proven&ccedil;al / Huevo Pochado</p>
									<h5 class="center">GRILLED CHEESE</h5>
									<p class="center" style="margin-top: -.4em">Pan Integral / Queso Emmental / Mermelada de elecci&oacute;n <br> - Con Jam&oacute;n -</p>
									<h5 class="center">CROQUE CROISSANT</h5>
									<p class="center" style="margin-top: -.4em">Jam&oacute;n de Pavo / Mostaza Dij&oacute;n / Salsa Bechamel / Tomate Proven&ccedil;al / Queso Emmental</p>
									<h5 class="center">PAN &amp; TOMATE CATALAN</h5>
									<p class="center" style="margin-top: -.4em">Pan Campesino al Ajo / Perejil / Emulsi&oacute;n de Tomates</p>
									<h5 class="center">AVOCADO &amp; SMOKED SALMON CROISSANT</h5>
									<p class="center" style="margin-top: -.4em">Aguacate / Salm&oacute;n Ahumado / Cebolla Encurtida / Huevo al Gusto</p>
									<h5 class="center">EGG &amp; BACON CROISSANT</h5>
									<p class="center" style="margin-top: -.4em">Huevo Frito / Bacon / Tomate fresco / Cebolla Agria</p>
								</div>
								<!-- BREAKFASTS SANDWICHES END -->
								<!-- HOUSE -->
								<div class="conteiner center">
									
									<h2 class="center">HOUSE SPECIAL</h2>

									<h5 class="center">HUEVOS FIORENTINA</h5>
									<p class="center" style="margin-top: -.4em">Espinaca Cremosa / Salsa Bechamel / Gratinado de Parmesano / Huevo Pochado / Tortilla de Ma&iacute;z</p>
									<h5 class="center">BENEDICTO JULIETA</h5>
									<p class="center" style="margin-top: -.4em">Tomates Rostizados / Portobello / Huevo Pochado / R&uacute;cula / Queso Cottage / Trufas</p>
									<h5 class="center">HUEVOS ROTOS</h5>
									<p class="center" style="margin-top: -.4em">Crujiente de Papa / Chorizo / Jam&oacute;n / Huevos Estrellados / Salchicha</p>
									<h5 class="center">MUFFIN DE GUAYABA</h5>
									<p class="center" style="margin-top: -.4em">English Muffin / Queso de Cabra / Nueces / Piquillos / R&uacute;cula / Mermelada de Guayaba </p>
									<h5 class="center">QUESADILLA DE CLARA</h5>
									<p class="center" style="margin-top: -.4em">Tortilla de Trigo / Queso Cottage / R&uacute;cula / Pico de Gallo / Jam&oacute;n de Pavo</p>
									<h5 class="center">OMELETTE DE CLARA</h5>
									<p class="center" style="margin-top: -.4em">Claras de Huevo / Potobello / Espinaca Cremosa / Ajonjol&iacute; / Tomates Rostizados / Queso Emmental</p>
								</div>
								<!-- HOUSE END -->

								<!-- CLASSICS -->
								<div class="conteiner center">
									<h2 class="center">CLASSICS</h2>

									<h5 class="center">THE DOMINICAN</h5>
									<p class="center" style="margin-top: -.4em">Eggs Any Style / Mang&uacute; / Salami / Cebolla en Escabeche / Queso Frito</p>
									<h5 class="center">INTERCONTINENTAL</h5>
									<p class="center" style="margin-top: -.4em">2 Eggs Any Style / Jam&oacute;n o Bacon / Croissant / Yogurt, Granola &amp; Fruit Bowl</p>
									<h5 class="center">THE AMERICAN</h5>
									<p class="center" style="margin-top: -.4em">2 Eggs Any Style / Pancakes / Jam&oacute;n o Bacon / Papas Rostizadas</p>
								</div>
								<!-- CLASSICS END -->

								<!-- PANCAKES -->
								<div class="conteiner center">
									<h2 class="center">PANCAKES &amp; WAFFLES</h2>

									<div class="col s6">
									<h5 class="center">AMERICAN PANCAKES</h5>
									<p class="center" style="margin-top: -.4em">Fresas / Syrup</p>
									<h5 class="center">OREO PANCAKES (VEGAN)</h5>
									<p class="center" style="margin-top: -.4em">Cocoa Pancakes / Oreo Filling / Milk Sauce</p>
									<h5 class="center">CHEESECAKE CROISSANT</h5>
									<p class="center" style="margin-top: -.4em">Nutella / Cream Cheese Glaze / Fresas</p>
									<h5 class="center">PANCAKE ROLLS</h5>
									<p class="center" style="margin-top: -.4em">Pancake Fino / Crema Batida / Fresas / Helado de Vanilla</p>
									<h5 class="center">FRENCH TOAST</h5>
									<p class="center" style="margin-top: -.4em">Canela / Az&uacute;car / Syrup / Fresas</p>
									</div>


									<div class="col s6">
									<h5 class="center">NUTELLA TOWER</h5>
									<p class="center" style="margin-top: -.4em">Classic Pancakes / Nutella / Fresas</p>
									<h5 class="center">CINNAMON ROLL WAFFLES</h5>
									<p class="center" style="margin-top: -.4em">Canela / Az&uacute;car / Cream Cheese Glaze</p>
									<h5 class="center">OATMEAL PANCAKES</h5>
									<p class="center" style="margin-top: -.4em">Pancakes de Avena / <br> Miel Org&aacute;nica</p>
									<h5 class="center">CLASSIC WAFFLES</h5>
									<p class="center" style="margin-top: -.4em">Mermelada de Fresas / Helado de Vainilla</p>
									<h5 class="center">GLUTEN FREE PANCAKES</h5>
									<p class="center" style="margin-top: -.4em">Miel Org&aacute;nica</p>
									</div>
									
								</div>
								<!-- PANCAKES END -->
								<!-- MONTADITOS -->
								<div class="conteiner center">
									<h2 class="center">MONTADITOS</h2>

									<div class="col s6">
									<h5 class="center">ITALIANO</h5>
									<p class="center" style="margin-top: -.4em">Prosciutto / Mermelada de Fresas</p>
									<h5 class="center">SALM&Oacute;N AHUMADO</h5>
									<p class="center" style="margin-top: -.4em">Dijonnaise / Alcaparras / Cebollas</p>
									</div>


									<div class="col s6">
									<h5 class="center">COTTAGE CHEESE</h5>
									<p class="center" style="margin-top: -.4em">Miel Org&aacute;nica / Frutas Mixtas</p>
									<h5 class="center">QUESO BRIE</h5>
									<p class="center" style="margin-top: -.4em">Cremoso de Foi Gras / Mermelada de Manzanas</p>
									</div>
									
								</div>
								<!-- MONTADITOS END -->
								<!-- SIDES -->
								<div class="conteiner center">
									<h2 class="center">SIDES</h2>

									
									<h5 class="center">CANASTA DE PANES</h5>
									<p class="center" style="margin-top: -.4em">Con su elecci&oacute;n de Mermeladas</p>
									<h5 class="center">PUR&Eacute; DE BATATA</h5>
									<h5 class="center">MERMERLADA HECHA EN CASA</h5>
									<p class="center" style="margin-top: -.4em">- Fresas - Melocot&oacute;n - Zanahoria &amp; naranja - Sabor de la Semana</p>
								
									
								</div>
								<!-- SIDES END -->
							</div>
							<div class="modal-footer">
								<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
							</div>
						</div>

					</div>

					<div class="col s12 m4 l4 ">

						<div class="card-image waves-effect">
							<a class="" href="#modal3">
								<img class="responsive-img" src="./images/AlmuerzoCena.png">
							</a>
						</div>
						<div id="modal3" class="modal">
							<div class="modal-content">
								<!-- ENTRADAS -->
								<div class="conteiner center">
									<h2 class="center">ENTRADAS</h2>
	                                 <hr>
									<div class="col l6 m6 s12">
									<h5 class="center">SOPA DE LA SEMANA</h5>
									<h5 class="center">MINI SLIDERS DE WAGYU BEEF</h5>
									<p class="center" style="margin-top: -.4em">Tocineta / Garlic &amp; Bone  Marrow Butter / Queso Comt&eacute; / Cebollas al Frangelico </p>
									<h5 class="center">CARPACCIO DE PORTOBELLO (VEGAN)</h5>
									<p class="center" style="margin-top: -.4em">Marinado de Miso / Aguacate / Chimichurri de Cilantro</p>
									<h5 class="center">BURRATA TIPO STRACIATELLA &AMP; CHIPS DE PROSCIUTTO</h5>
									<p class="center" style="margin-top: -.4em">Focaccia / Miel de Trufas / Romero / Crocante de Parmesano</p>
									<h5 class="center">EDAMAME</h5>
									<p class="center" style="margin-top: -.4em">Flor de Sal / Aceite de Oliva</p>
									<h5 class="center">SART&Eacute;N DE GAMBAS</h5>
									<p class="center" style="margin-top: -.4em">Ajo Confitado / Aceitunas Mixtas / Tomates Cherry / Alioli Ahumado</p>
									<h5 class="center">CALAMARES A LA PUTANESCA</h5>
									<p class="center" style="margin-top: -.4em">Calamares Fritos / tomates / Aceitunas / Alcaparras / Albahaca</p>
									<h5 class="center">PULPO AL GRILL</h5>
									<p class="center" style="margin-top: -.4em">Ensalada de Garbanzos, Ma&iacute;z &amp; Papas / Chimichurri de Cilantro / Crema de Aguacate</p>
									<h5 class="center">PULPO TEMPURA</h5>
									<p class="center" style="margin-top: -.4em">Chunky Guacamole / Jalapeños / Cilantro / Pepinillos</p>
									<h5 class="center">DIP DE ESPINACA Y TXITORRA</h5>
									<p class="center" style="margin-top: -.4em">Sticks de Pan de Ajo y Perejil / Pita Chips</p>
									<h5 class="center">JULIETA&#39;S TRUFFLED FONDUE</h5>
									<p class="center" style="margin-top: -.4em">Sticks de Pan de Ajo y Perejil / Chorizo / Papas Caseras</p>
									<h5 class="center">CROQUETAS DE LAC&Oacute;N AHUMADO</h5>
									<p class="center" style="margin-top: -.4em">Alioli de Ceniza / Texturas de Manchego</p>
									</div>


									<div class="col l6 m6 s12">

									<h5 class="center">TUTI&#39;S CHICHARR&Oacute;N NACHOS</h5>
									<p class="center" style="margin-top: -.4em">Carne Molida / Fondue de Cheddar / Pico de Gallo / Chunky Guacamole / Crema Agria Trufada / Chicharr&oacute;n / Cilantro / Jalapeños</p>
									<h5 class="center">RICELESS SALMON ROLL</h5>
									<p class="center" style="margin-top: -.4em">Aguacate / Queso  Philadelphia /Quinoa Tostada / Wasabi</p>
									<h5 class="center">DIM SUM DE CERDO</h5>
									<p class="center" style="margin-top: -.4em">Cebolla Encurtida / Soya &amp; S&eacute;samo</p>
									<h5 class="center">TARTAR DE AT&Uacute;N CL&Aacute;SICO</h5>
									<p class="center" style="margin-top: -.4em">Puerro / Ajonjoli / Casabe Tostado</p>
									<h5 class="center">CARPACCIO CL&Aacute;SICO</h5>
									<p class="center" style="margin-top: -.4em">R&uacute;cula / Parmesano / Aceite de Olivia / Alcaparras</p>
									<h5 class="center">CEVICHE PERUANO MIXTO DE MARISCOS</h5>
									<p class="center" style="margin-top: -.4em">Pescado / Camar&oacute;n / Pulpo / Aj&iacute; Amarillo / Batata / Ma&iacute;z / Crema de Aguacate</p>
									<h5 class="center">JUICY SHORT RIB WONTON</h5>
									<p class="center" style="margin-top: -.4em">Quick "Kim Chi" Salad / Cajuil Tostado</p>
									<h5 class="center">THAI SHRIMP DUMPLNG</h5>
									<p class="center" style="margin-top: -.4em">Cilantro / Limoncillo / Salsa Ponzu</p>
									<h5 class="center">SALCHICHAS MIXTAS</h5>
									<p class="center" style="margin-top: -.4em">- Italiana / Argentina / Mexicana - <br>-Trufle Mayo / Chimichurri / Honey Mustard</p>
									<h5 class="center">QUESADILLA DE CHURRASCO</h5>
									<p class="center" style="margin-top: -.4em">Ropa Vieja de Churrasco / Fondue de Queso / Chunky Guacamole</p>
									<h5 class="center">PHILLY STEAK EGGROLL</h5>
									<p class="center" style="margin-top: -.4em">Short Rib / Cebolla Caramelizada / Cheddar / Provolone</p>
									<h5 class="center">PULLED PORK TACO</h5>
									<p class="center" style="margin-top: -.4em">Sweet BBQ Pork / Cebolla Encurtida / Chicharr&oacute;n / Guacamole</p>
									</div>
								</div>
								<!-- ENTRADAS  -->
								<!-- POKEBOWLS -->
								<div class="conteiner center">
									<h2 class="center">POKE BOWLS</h2>

								
									<h5 class="center">TUNA</h5>
									<p class="center" style="margin-top: -.4em">Tuna Tartar / Sand&iacute;a / Pepino Chino / Cajuil / Germinados de Soya / Cebolla Encurtida / Aguacate</p>
									<h5 class="center">SALM&Oacute;N KIM CHI</h5>
									<p class="center" style="margin-top: -.4em">Salm&oacute;n Marinado / ensalda "Kim Chi" / Edemame / Arroz Salvaje / Wakame / Aguacate</p>
									<h5 class="center">GREEK COUSCOUS AND MEATBALLS</h5>
									<p class="center" style="margin-top: -.4em">Herbed Couscous / Pepino / Tomate / Feta / Alb&oacute;ndigas Griegas / Tztaziki / Semillas de Auyama</p>
									<h5 class="center">ROCK SHRIMP TEMPURA</h5>
									<p class="center" style="margin-top: -.4em">Sriracha Mayo / Aguacate / Lechuga / Furikake / Edamame / Semillas Mixtas</p>
									
								</div>
								<!-- POKEBOWLS En -->
								<!-- ENSALDAS-->
								<div class="conteiner center">
									<h2 class="center">ENSALADAS</h2>

									
									<h5 class="center">CHICKEN &amp; PESTO SALAD</h5>
									<p class="center" style="margin-top: -.4em">Pollo Al Grill / Mozzarella / Parmesano / Tomate / Crutones / Alcaparras</p>
									<h5 class="center">FRESH SALMON SALAD</h5>
									<p class="center" style="margin-top: -.4em">Salm&oacute;n al Grill / Tzatziki / Couscous / Tomate / Pepino / Aceitunas / Lechugas Mixtas</p>
									<h5 class="center">CHURRASCO SALAD</h5>
									<p class="center" style="margin-top: -.4em">Churrasco / Parmesano / Crutanes  Vegetales Asados / Tocineta</p>
									<h5 class="center">JULIETA&#8217;S CAESAR SALAD</h5>
									<p class="center" style="margin-top: -.4em">Aderezo de la Casa / Lechuga Romana / Crutones / Pollo al Grill / Tocineta</p>
									<h5 class="center">ENSALADA DE CORDERO</h5>
									<p class="center" style="margin-top: -.4em">Cordero Ripiado / Quinoa / Lechuga / Croquetas de Queso de Cabra / Salsa Honey Mustard</p>
								</div>
								<!-- ENSALDAS END -->
								<!-- PASTAS -->
								<div class="conteiner center">
									<h2 class="center">PASTAS &AMP; RISOTTOS</h2>

								
									<div class="col l6 m6 s12">
									
								
									<h5 class="center">RISOTTO AURORA</h5>
									<p class="center" style="margin-top: -.4em">Camar&oacute;n al Ajillo / Aguacate / Pl&acute;tano "Shoestring"</p>
									<h5 class="center">LINGUINE AGLIO E OLIO</h5>
									<p class="center" style="margin-top: -.4em">Camarones al Sart&eacute;n / Tomates Cherry / Peperoncino / Queso Parmesano</p>
									<h5 class="center">RAVIOLI DE 4 QUESOS</h5>
									<p class="center" style="margin-top: -.4em">Rellenos de Prosciutto / Salsa 4 Quesos / Cebolla Caramelizada / Trufas</p>
									<h5 class="center">LASAÑA DE LA NONA</h5>
									<p class="center" style="margin-top: -.4em">Boloñesa Casera / Bechamel de Parmesano / Mozzarella</p>
									<h5 class="center">TORTELINI A LA CARBONARA</h5>
									<p class="center" style="margin-top: -.4em">Relleno de Ricotta &amp; Tocineta / Pancetta Crujiente / Panna / Pimienta Negra</p>
									</div>

									<div class="col l6 m6 s12">
									
									<h5 class="center">LO MEIN DE CAMARONES</h5>
									
									<p class="center" style="margin-top: -.4em">Fideos de Huevo / Vegetales Asados / Teriyaki de Jengibre / Semillas de Cajuil</p>
					
									<h5 class="center">PENNE &AMP; CHORIZO GRATINADO</h5>
									<p class="center" style="margin-top: -.4em">Fondue de Queso Provolone / Vino Tinto / Parmesano</p>
									<h5 class="center">FETUCCINE AL VODKA</h5>
									<p class="center" style="margin-top: -.4em">Salm&oacute;n Fresco al Sart&eacute;n / Tomate Proven&ccedil;al / Salsa Aurora</p>
									<h5 class="center">MUSHROOM &amp; SHORT RIB RISOTTO</h5>
									<p class="center" style="margin-top: -.4em">Estofado de Short Rib / Vino Tinto / Hongos Mixtos / Queso de Cabra </p>
									
									<h5 class="center" style="visibility:hidden;">MUSHROOM &amp; SHORT RIB RISOTTO</h5>
									<p class="center" style="margin-top: -.4em; visibility:hidden;">Estofado de Short Rib / Vino Tinto / Hongos Mixtos / Queso de Cabra </p>
									
									
									
									
									</div>
								</div>
								<!-- PASTAS END -->
								<!-- PIZZA-->
								<div class="conteiner center">
									<h2 class="center">PIZZA</h2>
									
									<h5 class="center">CAESAR (SIN SALSA)</h5>
									<p class="center" style="margin-top: -.4em">R&uacute;cula / Tocineta / Cremoso De Parmesano / Crutones / Pollo</p>
									<h5 class="center">CRIOLLA (BORDES RELLENOS)</h5>
									<p class="center" style="margin-top: -.4em">Tomate / Mozzarella / Espinaca Cremosa / Chicharrón / Aguacate (Bordes Rellenos)</p>

									<h5 class="center">FRESCO (SIN SALSA)</h5>
									<p class="center" style="margin-top: -.4em">Tomates Frescos / Mozzarella Fresca / Or&eacute;gano / Aceite Lombardi</p>
									<h5 class="center">VERDURE</h5>
									<p class="center" style="margin-top: -.4em">Hongos / Berenjena / Zucchini / Aj&iacute;es / Pesto</p>
									<h5 class="center">PARMA</h5>
									<p class="center" style="margin-top: -.4em">Prosciutto / R&uacute;cula / Tomates Secos / Lascas de Parmesano / Vincotto</p>
									<h5 class="center">BIANCA</h5>
									<p class="center" style="margin-top: -.4em">3 Quesos / Peras al Vino / Speck / Cebollas Caramelizadas / Pistachio / Aceite Lombardi</p>
									<h5 class="center">SARDINERO</h5>
									<p class="center" style="margin-top: -.4em">Anchoas / Cebollas / Alcaparras / Aceitunas</p>
									<h5 class="center">SALSICCIA</h5>
									<p class="center" style="margin-top: -.4em">Salchicha Italiana / Espinaca / Cebollino</p>
									<h5 class="center">IL FINO</h5>
									<p class="center" style="margin-top: -.4em">Speck Ahumado / Queso Pecorino / Trufas / Hongos al Sart&eacute;n / R&uacute;cula</p>
								</div>
								<!-- PIZZA END -->
								<!-- BURGERS-->
								<div class="conteiner center">
									<h2 class="center">BURGERS</h2>

									<h5 class="center">TRUFFLE FONDUE BURGER</h5>
									<p class="center" style="margin-top: -.4em">Sirloin / Hongos al Ajillo / Tomates Rostizados / Fondue de Provolone y Trufa / R&uacute;cula</p>
									<h5 class="center">THE JULIETA SIRLOIN BURGER</h5>
									<p class="center" style="margin-top: -.4em">Queso Muenster / Tomate / Lechuga / Fried Onion / Honey Smoked Bacon / Bacon Cream Cheese</p>
									<h5 class="center">CRISPY FRIED CHICKEN BURGER</h5>
									<p class="center" style="margin-top: -.4em">Ajo Confitado . Aguacate / Queso Muenster / Pico de Gallo / Bacon</p>
									<h5 class="center">STEAK &amp; EGG BURGER</h5>
									<p class="center" style="margin-top: -.4em">BBQ Sirloin / Saut&eacute;d onion / Bacon / Queso Provolone / Huevo Frito / Lechuga / Tomate</p>
									<h5 class="center">JULIETA CLUB SANDWICH</h5>
									<p class="center" style="margin-top: -.4em">Pollo al Grill / Tocineta / Aguacate / Rhode Island Sauce / Lechuga / Tomate</p>
								</div>
								<!-- BURGERS END -->
								<!-- CARNES-->
								<div class="conteiner center">
									<h2 class="center">CARNES</h2>

									<h5 class="center">40oz COWBOY STEAK PRIME</h5>
									<p class="center" style="margin-top: -.4em;">- PARA 2 PAX -</p>
									<p class="center" style="margin-top: -.4em">Con 3 guarniciones de su preferencia</p>
									<h5 class="center">SHORT RIB &Aacute;RABE</h5>
									<p class="center" style="margin-top: -.4em">Asado con 6 Especias / Risotto de Quinoa / Tzatziki / Crujiente de Papas</p>
									<h5 class="center">MONGOLIAN BEEF</h5>
									<p class="center" style="margin-top: -.4em">Tnederloin / Semillas Cajuil / Salsa Mongolian / Puerr&oacute;n Frito</p>
									<h5 class="center">CHIVO GUISADO</h5>
									<p class="center" style="margin-top: -.4em">Arroz Blanco / Frito Verde / Aguacate</p>
									<h5 class="center">CHURRASCO AL GRILL</h5>
									<p class="center" style="margin-top: -.4em">Papas Rostizadas. Ma&iacute;z / Queso de Cabra / Bacon / Salsa de Vino Tinto</p>
									<h5 class="center">CHINESSE GLAZED (BONELESS) BABY BACK RIBS</h5>
									<p class="center" style="margin-top: -.4em">5 Spice Powder / Cofee Hoisin / Arroz Frito con Huevo / Chips de Pl&aacute;tano</p>
									<h5 class="center">14oz SIRLOIN AL GRILL</h5>
									<p class="center" style="margin-top: -.4em">Cebolla Caramelizada / queso Gorgonzola / Salsa de Vino Tinto / Papas Trufadas</p>
									<h5 class="center">POLLO CONFITADO</h5>
									<p class="center" style="margin-top: -.4em">Cheesy Creamy Gnocchi de Auyama / Gratinado de Parmesano</p>
									<h5 class="center">TAGLIATA DE TENDERLOIN (LIGHT)</h5>
									<p class="center" style="margin-top: -.4em">Ensalada Verde / Aguacate / Tomate Proven&ccedil;al</p>
								</div>
								<!-- CARNES END -->
								<!-- BURGERS-->
								<div class="conteiner center">
									<h2 class="center">PESCADOS</h2>

									<h5 class="center">CAMARONES ERIK</h5>
									<p class="center" style="margin-top: -.4em">Bok Choy / Shitake / Edamame / Aj&iacute;es / Ajonjol&iacute; / Jengibre / Salsa ketjap Manis</p>
									<h5 class="center">LUBINA A LA LEÑA</h5>
									<p class="center" style="margin-top: -.4em">Saz&oacute;n Gallego / Almejas / Piquillos / Arroz Melozo</p>
									<h5 class="center">TUNA &amp; CAMAR&Oacute;N AL GRILL</h5>
									<p class="center" style="margin-top: -.4em">Arroz Frito / Aguacate / Lechuga a la Parrilla / Chili Garlic Sauce</p>
									<h5 class="center">SALM&Oacute;N FRESCO</h5>
									<p class="center" style="margin-top: -.4em">Gnocchi de Auyama / Hongos Mixtos / Tomates Rostizados / Salsa de Parmesano / Petit Pois</p>
									
								</div>
								<!-- BURGERS END -->


							</div>
							<div class="modal-footer">
								<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
							</div>
						</div>

					</div>

				</div>
				<div class="row"></div>
				<div class="row"></div> 

			</div>
		</div>

		<!--Menu End -->

		<!--Galeria Bar -->

		<div class="row soc-pad scrollspy mTop" id="galeria">

			<div class="col s4 m4 l4 pad-col">
				
				<div class="card-image waves-effect">
					<img class="responsive-img" src="./images/mPic1.png">
				</div>

			</div>

			<div class="col s4 m4 l4 pad-col">
				
				<div class="card-image waves-effect">
					<img class="responsive-img" src="./images/mPic2.png">
				</div>

			</div>

			<div class="col s4 m4 l4 pad-col">
				
				<div class="card-image waves-effect">
					<img class="responsive-img" src="./images/mPic3.png"> 
				</div>

			</div>


		</div>
		<div class="row black">
			<div class="col s4 m4 l4 pad-col">
				
				<div class="card-image waves-effect">
					<img class="responsive-img" src="./images/mPic4.png">

				</div>

			</div>

			<div class="col s4 m4 l4 pad-col">
				
				<div class="card-image waves-effect">
					<img class="responsive-img" src="./images/mPic5.png">
				</div>

			</div>

			<div class="col s4 m4 l4 pad-col">
				
				<div class="card-image waves-effect">
					<img class="responsive-img" src="./images/mPic6.png">
				</div>
				
			</div>
		</div>




	</div>
</div>
</div>




<!--Contacto     -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<div class="fMenu white-text section mBot">
		<div class="container">
			<h2 class="titulo">Reservaci&oacute;n</h2>
			<div class="col s12 m12 l12">

				<div class="row">
					<div class="input-field col s6">
						<input id="last_name" type="text" class="validate" name="name">
						<label for="last_name" class="white-text">Nombre y apellido</label>
					</div>
					<div class="input-field col s6">
						<input id="email" type="email" class="validate" name="email">
						<label for="email" class="white-text">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<textarea id="textarea1" class="materialize-textarea" name="message" placeholder="Escribir su mensaje junto a su numero de contacto"></textarea>
						<label for="textarea1" class="white-text">Mensaje</label>
					</div>
					<div class="input-field col m6 s12">
						<button class="btn white black-text waves-effect waves-light">
							<input type="submit" value="Enviar" onclick="<?php sendEmail();?>"> 

						</button>
					</div>
					<div class="input-field col m6 s12">
						<div class="g-recaptcha" data-sitekey="6Lf7_SQUAAAAAGrQQzSKR4_jLvqpB0LT4kTcB97c"></div>
					</div>

				</div>
			</div>
		</div>
	</div>
</form>

<!--Contacto End -->


</div>

<!--Galeria End -->


<!-- Footer -->
<footer id="reservas" class="fMenu page-footer scrollspy mTop">
	<div class="container scrollspy " id="contacto">
		<div class="row">
			<div class="col l6 s12"> 
				<h5 class="white-text light titulo1" itemscope itemtype ="http://schema.org/Organization">CONTACTOS</h5>
				<p class="grey-text text-lighten-4 light" itemprop="address">Gustavo Mej&iacute;a Ricart Esq. Manuel de Jes&uacute;s Troncoso Ens. Piantini.<br>Todos los días de 7:00 A.M. a 12:00 P.M. <br> <span itemprop="telephone">T. 809 475 1007</span></p>
			</div>
			<div class="col l4 offset-l2 s12">
				<h5 class="white-text light titulo1">REDES SOCIALES</h5>
				<ul>
					<li><img class="responsive-img s-svg"  src="./images/facebook.svg">
						<a class="grey-text text-lighten-3 light" style="vertical-align: center" href="https://www.facebook.com/julietabrasserie/" target="_blank">Facebook</a></li>

						<li><img class="responsive-img s-svg" src="./images/instagram.svg">
							<a class="grey-text text-lighten-3 light" href="https://www.instagram.com/julietabrasserie/" target="_blank"> Instagram</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright black">
			<div class="container center light">
				<span style="font-size: .8em;">© 2017 FOODHALL - JULIETA BRASSERIE | Design by <a href="https://www.ricardodiazm.net">Ricardo Diaz</a></span>
			</div>
		</div>
	</footer>
	<!-- Footer End -->

	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>
	<script src="js/init.js"></script>


	<script type="text/javascript">

		$( document ).ready(function(){
			$('.scrollspy').scrollSpy();
			$('.parallax').parallax();
			$(".button-collapse").sideNav({closeOnClick: true});

			$('.modal').modal({
				
				inDuration: 100
			});
			



		});
	</script>

</body>
</html>
