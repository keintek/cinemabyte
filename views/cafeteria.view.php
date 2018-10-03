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
							<li  class="active"><a href="cafeteria.php">Cafetería</a></li>
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
	<h4 class="latest-text w3_latest_text">Cafetería</h4>
			<div class="container">
				<div class="agileinfo-news-top-grids">
					<div  class="wthree-top-news-left">
						<div style="background: #FF8D1B;" class="wthree-news-right-heading">
								<h3 > Combos</h3>
							</div>
						<div style="background: #FFFFFF;" class="wthree-news-left">
							</br>
				<div class="flexslider">
					<ul class="slides">
						<?php foreach($combos as $combo): ?>
						<li>
							<div class="col-md-7 agile_tv_series_grid">
									<div class="w3ls_market_video_grid1">
										<img src="<?php echo $combo['ruta'].$combo['archivo']; ?>" alt=" " class="img-responsive" />
									</div>
								</div>
								<div class="col-md-5 agile_tv_series_grid">
									<div class="w3ls_market_video_grid1">
										<p style = "text-align: center;"></br><h2 style = "text-align: center;"><?php echo $combo['titulo']; ?></h2></br>

										<?php echo $combo['descripcion']; ?>
										</br></br>
										
									</p>
									</div>
								</div>	
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			
	</div>
</div>			
</div>
<div class="faq">
			<div class="container">
				
				<div class="agileinfo-news-top-grids">
					<div  class="wthree-top-news-left">
						<div style="background: #FF8D1B;" class="wthree-news-right-heading">
								<h3 ><i class="fas fa-film"></i> Productos</h3>
							</div>
						<div style="background: #FFFFFF;" class="wthree-news-left">
							</br>
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						<div class="w3_agile_featured_movies">
							
							<?php foreach($productos as $producto): ?>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a class="hvr-shutter-out-horizontal"><img src="<?php echo $producto['ruta'].$producto['archivo']; ?>" title="album-name" class="img-responsive" alt=" " />
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a><?php echo $producto['nombre']; ?></a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
											<ul class="w3l-ratings">
												<p>Precio:</p>
												<li><a><i>$<?php echo $producto['precio']; ?> MXN	</i></a></li>
											</ul>
										<div class="clearfix"></div>
									</div>
								</br>
								
								</div>
								<?php 
									if($producto['etiqueta'] == 1)
										 { ?>
								<div class="ribben">
									<p><?php echo $producto['textetiqueta']; ?></p>
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
<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
	</div>
	<!-- pop-up-box -->  
	
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	
	<div id="small-dialog1" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/148284736"></iframe>
	</div>
	<div id="small-dialog2" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
	</div>
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
<?php require 'footer.php'; ?>