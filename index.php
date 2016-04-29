<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="/assets/img/#">
	<title>Individual</title>
	<meta charset="utf-8">
	<meta name="description" content="#"></meta>
	<meta name="keywords" content="#"></meta>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="assets/jquery/main.js"></script>
	<script src="assets/js/main.js"></script>
	<link rel="stylesheet" href="./assets/css/datepicker.css">
	<link rel="stylesheet" href="./assets/css/slider-ui.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<script src="./assets/jquery/datepicker.js"></script>
	<script src="assets/js/date.js"></script>
</head>

<body onload="setcurdate2( new Date() , new Date(new Date().getTime() + 24 * 60 * 60 * 1000))">
	<nav class="bg-green navclose">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-xs-3" style="padding: 0.9% 0;">
					<a href="./index.php"><img src="./assets/img/logo.PNG" class="img-responsive"></a>
				</div>
				<div class="col-sm-8 col-xs-9" style="padding: 0.9% 0;">
					<div class="links" style="margin-left: 8%; float: right;">
						<a href="#" class="white">About</a>
						<a href="#" class="white">Login</a>
						<a href="#" class="white">Sign up</a>
					</div>
					<button class="menu-button" type="button">
						<span class="crtica prva"></span>
						<span class="crtica druga"></span>
						<span class="crtica tretja"></span>
					</button>
				</div>
			</div>
		</div>
	</nav>
	<header>
		<div class="jumbotron">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="text-center white">Delightful accommodations in Istria</h1>
						<h2 class="text-center white">Global Travel And Vacations Luxury Travel On Tight Budget</h2>
						<button class="bg-green white center headerbtn">Explore offers&nbsp<font class="f1">></font><font class="f2">></font><font class="f3">></font></button>
					</div>
				</div>
			</div>
			<div class="select">
				<div class="center inputs">
					<form method="POST" action="./listings.php">
						<div class="containter">
							<div class="row">
								<div class="col-md-4 col-sm-8 nopad col-sm-offset-2 col-md-offset-0">
									<input type="search" name="city" class="citynamesearch" placeholder="Where do you want to go?" required>
								</div>
								<div class="col-md-4 col-sm-8 nopad col-sm-offset-2 col-md-offset-0">
									<div class="listingdate2">
										<div class="listingdatefrom2">
											<p class="green text-center" style="margin-bottom: 5px;font-weight: bold;font-size: 11px;">
												CHECK IN
											</p>
											<input type='text' id='calendar' name="datefrom" style="display: none" />
										</div>
										<div class="listingdateto2" style="font-size: 36px;">
											<p class="green text-center" style="margin-bottom: 5px;font-weight: bold;font-size: 11px;">
												CHECK OUT
											</p>
											<input type='text' id='calendar2' name="dateto" style="display: none" />
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-8 nopad col-sm-offset-2 col-md-offset-0">
									<div class="col-sm-6 col-xs-6 nopad">
										<select class="indexselect" name="guests">
												<option value="1">1 Guest</option>
												<option value="2">2 Guests</option>
												<option value="3">3 Guests</option>
												<option value="4">4 Guests</option>
												<option value="5">5 Guests</option>
												<option value="6">6 Guests</option>
												<option value="7">7 Guests</option>
												<option value="8">8 Guests</option>
												<option value="9">9 Guests</option>
												<option value="10">10 Guests</option>
												<option value="11">11 Guests</option>
												<option value="12">12 Guests</option>
												<option value="13">13 Guests</option>
												<option value="14">14 Guests</option>
												<option value="15">15 Guests</option>
												<option value="16">16+ Guests</option>
											</select>
									</div>
									<div class="col-sm-6 col-xs-6 nopad">
										<input type="submit" class="indexsearchbutton" value="Search">
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</header>
	<section class="popular">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="text-center green">Most popular places to stay</h1>
					<h3 class="text-center grey">Discover beautiful and relaxing places for summer holidays or just weekend in marvelous Istria</h3>
					<div class="crtica center">
						<!--crtica-->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="bg center">
						<img src="./assets/img/scrop.JPG" class="img-responsive center" />
						<div class="content">
							<h2 class="text-center white">Umag</h2>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="bg center">
						<img src="./assets/img/acrop.JPG" class="img-responsive center" />
						<div class="content">
							<h2 class="text-center white">Novi grad</h2>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="bg center">
						<img src="./assets/img/pcrop.JPG" class="img-responsive center" />
						<div class="content">
							<h2 class="text-center white">Portorož</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<button class="white bg-green center bodybtn">See all destinations</button>
				</div>
			</div>
		</div>
	</section>
	<section class="explore">
		<div class="jumbotron">
			<h1 class="text-center white">Explore the secrets of Istria with us</h1>
			<h3 class="text-center white">The availability of low-cost flights and last minute internet deals means that cheap holidays are far easier 
				to come by than they used to be.</h3>
		</div>
	</section>
	<section class="services">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="text-center green" style="font-size: 48px;">Our services</h2>
					<h3 class="text-center grey">When choosing a static caraban you will probably look for the holiday park which meets your requirements and then move onto the caravan.</h3>
					<button class="white bg-green center bodybtn">Get to know more</button>
				</div>
			</div>
		</div>
	</section>
	<footer class="bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="text-center green">Individual copyright</h3>
					<p class="text-center green">All rights reserved</p>
				</div>
			</div>
		</div>
	</footer>
</body>
<script>
	$(document).ready(function() {
		//s$(".select").css("margin-top", "-"+(30+$(".select").height())+"px")
		$(".menu-button").click(function() {
			$(".prva").toggleClass("prvax");
			$(".druga").toggleClass("drugax");
			$(".tretja").toggleClass("tretjax");
			$(".crtica").toggleClass("crticax");
			$("nav").toggleClass("navopen")
		});
		if ($(window).width() <= 768) {
			$(".links").css("right", $(window).width() / 2 - 75 + "px");
		}
	});
	$('#calendar').datepicker({
		dateFormat: 'mm/dd/yy',
		inline: true,
		showOn: 'button',
		firstDay: 1,
		showAnim: 'slideDown',
		minDate: new Date(),
		onSelect: function(dateText, inst) {
			var date = $(this).datepicker('getDate'),
				h = new Date(date.getTime() + 24 * 60 * 60 * 1000);
			day = date.getDate(),
				month = date.getMonth() + 1,
				year = date.getFullYear();
			$('#calendar2').datepicker('option', 'minDate', h).next("#date").attr('id', 'datet').addClass("grey");
			var d = $("#calendar2").datepicker('getDate'),
				da = d.getDate(),
				mon = d.getMonth() + 1,
				yea = d.getFullYear();
			if (da < 10) {
				da = "0" + da;
			}
			if (mon < 10) {
				mon = "0" + mon;
			}
			yea = yea.toString().substr(2, 2);
			$("#datet").text(da + '/' + mon + '/' + yea);
			if (day < 10) {
				day = "0" + day;
			}
			if (month < 10) {
				month = "0" + month;
			}
			year = year.toString().substr(2, 2);
			$("#datefr").text(day + '/' + month + '/' + year);
		}
	}).next("#date").attr('id', 'datefr').addClass("grey");

	$('#calendar2').datepicker({
		dateFormat: 'mm/dd/yy',
		inline: true,
		showOn: 'button',
		firstDay: 1,
		showAnim: 'slideDown',
		minDate: new Date(new Date().getTime() + 24 * 60 * 60 * 1000),
		onSelect: function(dateText, inst) {
			var date = $(this).datepicker('getDate'),
				day = date.getDate(),
				month = date.getMonth() + 1,
				year = date.getFullYear();
			if (day < 10) {
				day = "0" + day;
			}
			if (month < 10) {
				month = "0" + month;
			}
			year = year.toString().substr(2, 2);
			$("#datet").text(day + '/' + month + '/' + year);
		}
	}).next("#date").attr('id', 'datet').addClass("grey");

	$('#calendar').datepicker("setDate", new Date());
	var m = new Date();
	m.setDate(m.getDate() + 1);
	$('#calendar2').datepicker("setDate", new Date(m));
</script>

</html>