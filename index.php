<!DOCTYPE html>
<html lang=en>

<head>
	<link href=/assets/img/# rel=icon>
	<title>Individual</title>
	<meta charset=utf-8>
	<meta content=# name=description>
	<meta content=# name=keywords>
	<meta content="width=device-width,initial-scale=1" name=viewport>
	<link href=assets/css/index.css rel=stylesheet>
	<script src=assets/jquery/main.js></script>
	<script src=./assets/jquery/datepicker.js></script>
	<script src=assets/js/date.js></script>
</head>

<body onload="setcurdate2(new Date,new Date((new Date).getTime()+864e5))">
	<nav class="bg-green navclose">
		<div class=container>
			<div class=row>
				<div class="col-sm-3 col-xs-3" style="padding:.9% 0">
					<a href=./index.php><img class=img-responsive src=./assets/img/logo.PNG></a>
				</div>
				<div class="col-sm-8 col-xs-9" style="padding:.9% 0">
					<div class=links style=margin-left:8%;float:right>
						<a href=# class=white>About</a>
						<a href=# class=white>Login</a>
						<a href=# class=white>Sign up</a>
					</div>
					<button class=menu-button type=button>
						<span class="crtica prva"></span> 
						<span class="crtica druga"></span> 
						<span class="crtica tretja"></span>
					</button>
				</div>
			</div>
		</div>
	</nav>
	<header>
		<div class=jumbotron>
			<div class=container-fluid>
				<div class=row>
					<div class=col-sm-12>
						<h1 class="text-center white delight">Delightful accommodations in Istria</h1>
						<h2 class="text-center white">Global Travel And Vacations Luxury Travel On Tight Budget</h2>
						<button class="white bg-green center headerbtn" style="font-weight: 300;">Explore offers
							<img src="./assets/img/mainarrow.png" class="img-responsive mainarrow">
						</button>
					</div>
				</div>
			</div>
			<div class=select>
				<div class="center inputs">
					<form action=./listings.php method=POST>
						<div class=containter>
							<div class=row>
								<div class="nopad col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
									<input name=city class=citynamesearch list="kraji" placeholder="Where do you want to go?" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Where do you want to go?'" required type=search></div>
									<datalist id="kraji">
										<option value="Umag">
										<option value="Portorož">
										<option value="Novi Grad">
										<option value="Pula">
										<option value="Piran">
									</datalist>
								<div class="nopad col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
									<div class=listingdate2>
										<div class=listingdatefrom2>
											<p class="text-center green" style=margin-bottom:5px;font-weight:500;font-size:11px>CHECK IN</p><input name=datefrom id=calendar style=display:none></div>
										<div class=listingdateto2 style=font-size:36px>
											<p class="text-center green" style=margin-bottom:5px;font-weight:500;font-size:11px>CHECK OUT</p><input name=dateto id=calendar2 style=display:none></div>
									</div>
								</div>
								<div class="nopad col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
									<div class="nopad col-sm-6 col-xs-6"><select class=indexselect name=guests><option value=1>1 Guest<option value=2>2 Guests<option value=3>3 Guests<option value=4>4 Guests<option value=5>5 Guests<option value=6>6 Guests<option value=7>7 Guests<option value=8>8 Guests<option value=9>9 Guests<option value=10>10 Guests<option value=11>11 Guests<option value=12>12 Guests<option value=13>13 Guests<option value=14>14 Guests<option value=15>15 Guests<option value=16>16+ Guests</select></div>
									<div class="nopad col-sm-6 col-xs-6"><input class=indexsearchbutton type=submit value=Search style="font-weight: 300;"></div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</header>
	<section class=popular>
		<div class=container>
			<div class=row>
				<div class=col-sm-12>
					<h1 class="text-center green" style="font-weight: 400;">Most popular places to stay</h1>
					<h3 class="text-center grey">Discover beautiful and relaxing places for summer holidays or just weekend in marvelous Istria</h3>
					<div class="center cline"></div>
				</div>
			</div>
			<div class=row>
				<div class=col-sm-4>
					<div class="center bg"><img class="center img-responsive umagbox" style="opacity:1;" src=./assets/img/transparent.png>
						<div class=content>
							<h2 class="text-center white">Umag</h2>
						</div>
					</div>
				</div>
				<div class=col-sm-4>
					<div class="center bg"><img class="center img-responsive novibox" style="opacity:1;" src=./assets/img/transparent.png>
						<div class=content>
							<h2 class="text-center white">Novi Grad</h2>
						</div>
					</div>
				</div>
				<div class=col-sm-4>
					<div class="center bg"><img class="center img-responsive portobox" style="opacity:1;" src=./assets/img/transparent.png>
						<div class=content>
							<h2 class="text-center white">Portorož</h2>
						</div>
					</div>
				</div>
			</div>
			<div class=row>
				<div class=col-sm-12><button class="white bg-green center bodybtn" style="font-weight: 300;">See all destinations</button></div>
			</div>
		</div>
	</section>
	<section class=explore>
		<div class=jumbotron>
			<h1 class="text-center white">Explore the secrets of Istria with us</h1>
			<h3 class="text-center white" style="font-size: 25px; font-weight: 400;">The availability of low-cost flights and last minute internet deals means that cheap holidays are far easier to come by than they used to be.</h3>
		</div>
	</section>
	<section class=services>
		<div class=container>
			<div class=row>
				<div class=col-sm-12>
					<h2 class="text-center green" style=font-size:48px>Our services</h2>
					<h3 class="text-center grey">When choosing a static caraban you will probably look for the holiday park which meets your requirements and then move onto the caravan.</h3>
					<button class="white bg-green center bodybtn" style="font-weight: 300;">Get to know more</button>
				</div>
			</div>
		</div>
	</section>
	<footer class=bg-grey>
		<div class=container>
			<div class=row>
				<div class=col-sm-12>
					<h3 class="text-center green">Individual copyright</h3>
					<p class="text-center green">All rights reserved</div>
			</div>
		</div>
	</footer>
	<script>
		$(document).ready(function() {
			$(".menu-button").click(function() {
				$(".prva").toggleClass("prvax"), $(".druga").toggleClass("drugax"), $(".tretja").toggleClass("tretjax"), $(".crtica").toggleClass("crticax"), $("nav").toggleClass("navopen")
			}), $(window).width() <= 768 && $(".links").css("right", $(window).width() / 2 - 75 + "px")
		}), $("#calendar").datepicker({
			dateFormat: "mm/dd/yy",
			inline: !0,
			showOn: "button",
			firstDay: 1,
			showAnim: "slideDown",
			minDate: new Date,
			onSelect: function(t, e) {
				var a = $(this).datepicker("getDate"),
					n = new Date(a.getTime() + 864e5);
				day = a.getDate(), month = a.getMonth() + 1, year = a.getFullYear(), $("#calendar2").datepicker("option", "minDate", n).next("#date").attr("id", "datet").addClass("grey");
				var d = $("#calendar2").datepicker("getDate"),
					r = d.getDate(),
					i = d.getMonth() + 1,
					o = d.getFullYear();
				10 > r && (r = "0" + r), 10 > i && (i = "0" + i), o = o.toString().substr(2, 2), $("#datet").text(r + "/" + i + "/" + o), day < 10 && (day = "0" + day), month < 10 && (month = "0" + month), year = year.toString().substr(2, 2), $("#datefr").text(day + "/" + month + "/" + year)
			}
		}).next("#date").attr("id", "datefr").addClass("grey"), $("#calendar2").datepicker({
			dateFormat: "mm/dd/yy",
			inline: !0,
			showOn: "button",
			firstDay: 1,
			showAnim: "slideDown",
			minDate: new Date((new Date).getTime() + 864e5),
			onSelect: function(t, e) {
				var a = $(this).datepicker("getDate"),
					n = a.getDate(),
					d = a.getMonth() + 1,
					r = a.getFullYear();
				10 > n && (n = "0" + n), 10 > d && (d = "0" + d), r = r.toString().substr(2, 2), $("#datet").text(n + "/" + d + "/" + r)
			}
		}).next("#date").attr("id", "datet").addClass("grey"), $("#calendar").datepicker("setDate", new Date);
		$("#calendar2").datepicker("setDate", new Date(new Date()+24*60*60*1000))
	</script>