<?php require 'header.php'; ?>
<!-- news-css -->
<link rel="stylesheet" href="news-css/news.css" type="text/css" media="all" />
<!-- //news-css -->
<!-- list-css -->
<link rel="stylesheet" href="list-css/list.css" type="text/css" media="all" />
<!-- //list-css -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/modal-video.min.css">
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="js/modal-video.js"></script>
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
							<li  class="active"><a href="index.php"><i class="fas fa-home"></i> Inicio</a></li>
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
<!-- banner -->
	<div id="slidey" style="display:none;">
		<ul>
			<?php foreach($sliders as $slider): ?>
				<li><img src="<?php echo $slider['ruta'].$slider['nombrearchivo']; ?>" alt=" "><p class='title'><?php echo $slider['titulo']; ?></p><p class='description'><?php echo $slider['descripcion']; ?></p></li>
			<?php endforeach; ?>
		</ul> 
    </div>
    <script src="js/jquery.slidey.js"></script>
    <script src="js/jquery.dotdotdot.min.js"></script>
	   <script type="text/javascript">
			$("#slidey").slidey({
				interval: 8000,
				listCount:<?php echo $slider_config['cantidadslider'] ?>,
				autoplay: false,
				showList: true
			});
			$(".slidey-list-description").dotdotdot();
		</script>
<!-- //banner -->
<!-- banner-bottom -->
	
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
	<h4 class="latest-text w3_latest_text">Noticias</h4>
			<div class="container">
				
				<div class="agileinfo-news-top-grids">
					<div  class="col-md-8 wthree-top-news-left">
						<div style="background: #FF8D1B;" class="wthree-news-right-heading">
								<h3 ><i class="fas fa-newspaper"></i> Ultimas Noticias</h3>
							</div>
						<div style="background: #FFFFFF;" class="wthree-news-left">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<?php foreach ($articulos as $articulo): ?>
								
								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home1" aria-labelledby="home1-tab">
										<div class="wthree-news-top-left">
											<div class="col-md-11 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="<?php echo $articulo['ruta'] .  $articulo['archivo']; ?>" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html"><?php echo $articulo['titulo']; ?></a></h5>
													<p><?php echo $articulo['contenido']; ?></p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $articulo['fecha']; ?></li>
														
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											
											<div class="clearfix"> </div>
										</div>
										
									</div>								
									
								</div>
							<?php endforeach; ?>
								
							</div>
						</div>
			<section class="paginacion">
			<ul>
				<!-- Establecemos cuando el boton de "Anterior" estara desabilitado -->
				<?php if ($pagina == 1): ?>
					<li class="disabled">&laquo;</li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
				<?php endif; ?>

				<!-- Ejecutamos un ciclo para mostrar las paginas -->
				<?php 
				for ($i=1; $i <= $numeroPaginas ; $i++) { 
					if ($pagina == $i) {
						echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
					} else {
						echo "<li><a href='?pagina=$i'>$i</a></li>";
					}
				}
				?>

				<!-- Establecemos cuando el boton de "Siguiente" estara desabilitado -->
				<?php if ($pagina == $numeroPaginas): ?>
					<li class="disabled">&raquo;</li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
				<?php endif; ?>
			</ul>
		</section>
					</div>

					<div  class="col-md-4 wthree-news-right">
						<!-- news-right-top -->
						<div style="background: #FFFFFF;" class="news-right-top">
							<div style="background: #1da1f2;" class="wthree-news-right-heading">
								<h3 ><i class="fa fa-twitter"></i> Últimos Tweets</h3>
							</div>
							<div class="wthree-news-right-top">
								<div class="news-grids-bottom">
									<!-- date -->
									<div id="design" class="date">
										<div id="cycler">   
											
											<div class="date-text">
												<a href="news-single.html">February 15,2016</a>
												<p>Duis venenatis ac ipsum vel ultricies in placerat quam</p>
											</div>
											<div class="date-text">
												<a href="news-single.html">January 15,2016 <span class="blinking"><img src="images/new.png" alt="" /></span></a>
												<p>Pellentesque ullamcorper fringilla ipsum, ornare dapibus velit volutpat sit amet.</p>
											</div>
											<div class="date-text">
												<a href="news-single.html">September 24,2016</a>
												<p>In lobortis ipsum mi, ac imperdiet elit pellentesque at.</p>
											</div>
										</div>
										<script>
										function blinker() {
											$('.blinking').fadeOut(500);
											$('.blinking').fadeIn(500);
										}
										setInterval(blinker, 1000);
										</script>
										<script>
											function cycle($item, $cycler){
												setTimeout(cycle, 2000, $item.next(), $cycler);
												
												$item.slideUp(1000,function(){
													$item.appendTo($cycler).show();        
												});
												}
											cycle($('#cycler div:first'),  $('#cycler'));
										</script>
									</div>
									<!-- //date -->
								</div>
							</div>
						</div>
						<!-- //news-right-top -->
						
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
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
								<a href="pelicula.php?id=<?php echo $cartelera['id']; ?>"" class="hvr-shutter-out-horizontal"><img src="<?php echo $cartelera['ruta'].$cartelera['nombrearchivo']; ?>" title="album-name" class="img-responsive" alt=" " />
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
<div class="faq">
	<h4 class="latest-text w3_latest_text">Próximos estrenos</h4>
			<div class="container">
				
				<div class="agileinfo-news-top-grids">
					<div  class="wthree-top-news-left">
						<div style="background: #FF8D1B;" class="wthree-news-right-heading">
								<h3 ><i class="fas fa-video"></i> Próximamente</h3>
							</div>
						<div style="background: #FFFFFF;" class="wthree-news-left">
							</br>
				<div class="flexslider">
					<ul class="slides">
						<?php foreach($estrenos as $estreno): ?>
						<li>
							<div class="agile_tv_series_grid">
								<div class="col-md-6 agile_tv_series_grid_left">
									<div class="w3ls_market_video_grid1">
										<img src="<?php echo $estreno['ruta'].$estreno['nombrearchivo']; ?>" alt=" " class="img-responsive" />
										
										<a class="w3_play_icon" href="#small-dialog<?php echo $estreno['id']; ?>">
											<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
										</a>
										<div id="small-dialog<?php echo $estreno['id']; ?>" class="mfp-hide">
											<iframe src="//www.youtube.com/embed/<?php echo $estreno['link']; ?>"></iframe>
										</div>
									</div>
								</div>
								<div class="col-md-6 agile_tv_series_grid_right">
									<p class="fexi_header"><?php echo $estreno['titulo']; ?></p>
									<p class="fexi_header_para"><span class="conjuring_w3">Sinopsis:<label></label></span> <?php echo $estreno['sinopsis']; ?></p>
									<p class="fexi_header_para"><span>Fecha de Estreno:<label></label></span> <?php echo $estreno['fecha']; ?> </p>
									<p class="fexi_header_para">
										<span>Genero:<label></label> </span>
										<a><?php echo $estreno['genero']; ?></a>						
									</p>
									
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
<!-- Latest-tv-series -->
	

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
<!-- //Latest-tv-series -->

<?php require 'footer.php'; ?>