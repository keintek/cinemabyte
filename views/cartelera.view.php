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
							<li class="active"><a href="cartelera.php">Cartelera</a></li>
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
	<h4 class="latest-text w3_latest_text">en cartelera</h4>
			<div class="container">
				
				<div class="agileinfo-news-top-grids">
					<div  class="wthree-top-news-left">
						<div style="background: #FF8D1B;" class="wthree-news-right-heading">
								<h3 ><i class="fas fa-film"></i> Funciones</h3>
							</div>
						<div style="background: #FFFFFF;" class="wthree-news-left">
							</br>
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						<div class="w3_agile_featured_movies">
							
							<?php foreach($carteleras as $cartelera): ?>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="single.html" class="hvr-shutter-out-horizontal"><img src="<?php echo $cartelera['ruta'].$cartelera['nombrearchivo']; ?>" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html"><?php echo $cartelera['titulo']; ?></a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>Horario:</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i ><?php echo $cartelera['horario']; ?></i></a></li>
											</ul>
										</div>
										
										<div class="clearfix"></div>
									</div>
								</br>
								
									<div class="button_cont" align="center"><a class="example_e" href="add-website-here" target="_blank" rel="nofollow noopener">Reserva</a></div>
								</div>
								<?php 
									if($cartelera['estreno'] == 1)
										 { ?>
								<div class="ribben">
									<p>Estreno</p>
								</div>
								<?php } ?>
							</div>
							<?php endforeach; ?>
							
						</div>
					</div>
					
						</div>
						<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>			
</div>

<?php require 'footer.php'; ?>