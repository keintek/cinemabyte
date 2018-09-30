<?php require 'header.php'; ?>
<!-- news-css -->
<link rel="stylesheet" href="news-css/news.css" type="text/css" media="all" />
<!-- //news-css -->
<!-- list-css -->
<link rel="stylesheet" href="list-css/list.css" type="text/css" media="all" />
<!-- //list-css -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- //bootstrap-pop-up -->
<!-- nav -->
	<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li><a href="index.php"><i class="fas fa-home"></i> Inicio</a></li>
							<li class="active"><a href="series.html">Conócenos</a></li>
							<li><a href="series.html">Cartelera</a></li>
							<li><a href="news.html">Cafetería</a></li>
							<li><a href="list.html">Promociones</a></li>
							<li><a href="list.html">Próximos estrenos</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //nav -->

	
<!-- //banner-bottom -->
<div class="general_social_icons">
	<nav class="social">
		<ul>
			<li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
			<li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
			<li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
			<li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>				  
		</ul>
  </nav>
</div>
<div class="faq">
			<div class="container">
				
				<div class="agileinfo-news-top-grids">
					<div  class="wthree-top-news-left">
						<div style="background: #FFFFFF;" class="wthree-news-left">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<p>
									<h1>Nosotros</h1></br>
									Cinema Byte es una asociación civil privada dedicada a promover entretenimiento del público en la región a través de la difusión del cine de alta factura artística y cultural. Cuenta con profesionales de más de 20 años de experiencia en la programación de cine; goza del reconocimiento del sector público y privado, así como de empresas del área de la distribución nacional e internacional  y compañías de exhibición cinematográfica nacionales las cuales, entre otros, son factores claves de  apoyo en la producción de muestras y festivales.</br></br>
									<h1>Misión</h1></br> Estamos dedicados a ser los mejores en la prestación de servicios orientados al desarrollo y la promoción de la cultura cinematográfica, haciendo énfasis en la expansión del mercado mexicano hacia las obras de interés artístico, de procedencia diversa</br></br><h1>Visión</h1></br>Ser reconocido como líder en la promoción de la cultura cinematográfica en México, con una programación inteligente, versátil y de calidad. Llevar el disfrute del mejor cine a la mayor cantidad de público, para colocar la cultura y entretenimiento al alcance de todos los estratos y edades.
								</p>
							</br>
							</br>
								<a href="contact.html" class="myButtonx">Contáctanos</a>
							</br>
							</div>
						</div>
					</div>
					
						
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>

<?php require 'footer.php'; ?>