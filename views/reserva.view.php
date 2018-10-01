<?php require 'header.php'; ?>
<!-- news-css -->
<link rel="stylesheet" href="news-css/news.css" type="text/css" media="all" />
<!-- //news-css -->
<!-- list-css -->
<link rel="stylesheet" href="list-css/list.css" type="text/css" media="all" />
<!-- //list-css -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.seat-charts.js"></script>
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
							<li  class="active"><a href="cartelera.php">Cartelera</a></li>
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
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<div class="faq">
	<h4 class="latest-text w3_latest_text">reservación</h4>
			<div class="container">
				
				<div class="agileinfo-news-top-grids">
					<div  class="wthree-top-news-left">
						<div style="background: #FF8D1B;" class="wthree-news-right-heading">
								<h3 ><i class="fas fa-film"></i> Selecciona tus asientos</h3>
							</div>
						<div style="background: #FFFFFF;" class="wthree-news-left">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								
		
		<div class="demo">
			<div id="seat-map">
				<div class="front">Pantalla</div>					
			</div>
			<div class="booking-details">
				<ul class="book-left">
					<li>Pelicula: </li>
					<li>Time: </li>
					<li>Boletos:</li>
					<li>Total:</li>
					<li>Asientos:</li>
				</ul>
				<ul class="book-right">
					<li>Gingerclown</li>
					<li>April 3, 21:00</li>
					<li><span id="counter">0</span></li>
					<li><b><i>$</i><span id="total">0</span></b></li>
				</ul>
				<div class="clear"></div>
				<ul id="selected-seats" class="scrollbar scrollbar1"></ul>
			
						
				<button class="checkout-button">Reserva</button>	
				<div id="legend"></div>
			</div>
			<div style="clear:both"></div>
	    </div>

			<script type="text/javascript">
				var price = 25; //price
				$(document).ready(function() {
					var $cart = $('#selected-seats'), //Sitting Area
					$counter = $('#counter'), //Votes
					$total = $('#total'); //Total money
					
					var sc = $('#seat-map').seatCharts({
						map: [  //Seating chart
							'aaaaaaaaaaaa',
							'aaaaaaaaaaaa',
							'__________',
							'aaaaaaaa__',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'__aaaaaa__'
						],
						naming : {
							top : false,
							getLabel : function (character, row, column) {
								return column;
							}
						},
						legend : { //Definition legend
							node : $('#legend'),
							items : [
								[ 'a', 'available',   'Disponible' ],
								[ 'a', 'unavailable', 'Vendido'],
								[ 'a', 'selected', 'Seleccionado']
							]					
						},
						click: function () { //Click event
							if (this.status() == 'available') { //optional seat
								$('<li>Fila: '+(this.settings.row+1)+' Asiento: '+this.settings.label+'</li>')
									.attr('id', 'cart-item-'+this.settings.id)
									.data('seatId', this.settings.id)
									.appendTo($cart);

								$counter.text(sc.find('selected').length+1);
								$total.text(recalculateTotal(sc)+price);
											
								return 'selected';
							} else if (this.status() == 'selected') { //Checked
									//Update Number
									$counter.text(sc.find('selected').length-1);
									//update totalnum
									$total.text(recalculateTotal(sc)-price);
										
									//Delete reservation
									$('#cart-item-'+this.settings.id).remove();
									//optional
									return 'available';
							} else if (this.status() == 'unavailable') { //sold
								return 'unavailable';
							} else {
								return this.style();
							}
						}
					});
					//sold seat
					sc.get(['1_2', '4_4','4_5','6_6','6_7','8_5','8_6','8_7','8_8', '10_1', '10_2']).status('unavailable');
						
				});
				//sum total money
				function recalculateTotal(sc) {
					var total = 0;
					sc.find('selected').each(function () {
						total += price;
					});
							
					return total;
				}
			</script>
	
							</br>
							</br>
							</br>
							</div>
						</div>
					</div>
					
						
				</div>
					<div class="clearfix"> </div>
			</div>
</div>
<?php require 'footer.php'; ?>