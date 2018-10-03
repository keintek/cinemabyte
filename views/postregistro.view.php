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
							<li><a href="conocenos.php">Conócenos</a></li>
							<li><a href="cartelera.php">Cartelera</a></li>
							<li><a href="cafeteria.php">Cafetería</a></li>
							<li><a href="promociones.php">Promociones</a></li>
							<li><a href="proxestrenos.php">Próximos estrenos</a></li>
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
			<li class="w3_g_plus"><a href="#">Youtube <i class="fab fa-youtube"></i></a></li>					  
		</ul>
  </nav>
</div>
<div class="faq">
	<h4 class="latest-text w3_latest_text">Registro</h4>
			<div class="container">
				
				<div class="agileinfo-news-top-grids">
					<div  class="wthree-top-news-left">
						<div style="background: #FFFFFF;" class="wthree-news-left">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<p>
									<h1>Gracias por registrarte</h1></br>
									Tu cuenta se encuentra en proceso de verificación, recibirás un mail en tu correo electrónico con el que te registraste para poder concluir el proceso de activación</br></br>
								</p>
							</br>
							</br>
								<div class="button_cont" align="center"><a class="example_e" href="index.php" target="_blank" rel="nofollow noopener">Volver al inicio</a></div>
							</br>
							</div>
						</div>
					</div>
					
						
				</div>
					<div class="clearfix"> </div>
			</div>
</div>
<?php require 'footer.php'; ?>