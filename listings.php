<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="/assets/img/#">
	<title>Individual</title>
	<meta charset="utf-8">
	<meta name="description" content="#"></meta>
	<meta name="keywords" content="#"></meta>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/listings.css">
	<script src="assets/jquery/main.js"></script>
  <script src="assets/jquery/slider.js"></script>
	<script src="./assets/jquery/datepicker.js"></script>
	<script src="assets/js/date.js"></script>
</head>
<body onload="setcurdate( new Date() , new Date(new Date().getTime() + 24 * 60 * 60 * 1000)); sendDb();">
	<nav class="bg-green" style=" top:0;">
		<div class="container" style="margin-left: 0.45%;">
			<div class="row">
				<div style="padding: 0.9% 0;">
					<a href="./index.php">
						<img src="./assets/img/logo.PNG" class="img-responsive">
					</a>
				</div>
				<div class="lbord"></div>
				<div class="destination">
					<h2 class="white" style="font-weight: 300;">
						<?php echo "Umag Center"; ?>
					</h2>
				</div>
				<div>
					<div class="profilehead">
						<p class="white" style="font-weight: 300;">
							 John Doe
						</p>
						<img src="./assets/img/profile.jpg" class="img-responsive img-circle center">
					</div>
				</div>
			</div>
		</div>
	</nav>
	<section class="mainsec">
		<div class="container conpad">
			<form method="POST" action="listing_details.php" id="mainform">
				<input name="city" value="<?php echo $_POST["city"] ?>" style="display:none;">
				<div class="row">
					<div class="col-sm-12">
						<h3 style="font-size: 21px;font-weight: 400;">
							Dates
						</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="row" style="padding: 0 15px;">
							<div style="width: 140px; display: inline-block;">
								<input type='text' id='calendar' name="datefrom" style="display: none"/>
							</div>
							<div class="arrdiv">
								<img class="arr center" src="./assets/img/arrow.PNG">
							</div>
							<div style="width: 140px; display: inline-block;">
								<input type='text' id='calendar2' name="dateto" style="display: none"/>
							</div>
							<div class="guestdiv">
								<select class="guests grey" name="guests" onchange="sendDb();">
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
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="col-sm-10" style="padding: 0">
							<h3 style="font-size: 21px; margin-top: 40px; margin-bottom: 30px;font-weight: 400;">
								Rooms
							</h3>
							<div id="slider-range-min"></div>
							<div id="am2">
								<p class="grey" id="am21" style="float:left; margin-left: -6px; margin-top: 0px;">
									<b>1</b>
								</p>
								<input style="display:none;" name="rooms" id="amount2i">
								<p id="amount2" style="border:0; color:rgb(22, 160, 133); font-weight:bold; margin-top:5px;"></p>
								<p class="grey" id="am22" style="float:right;margin-top: -30px; margin-right: -2px;">
									<b>8</b>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="col-sm-10" style="padding: 0">
							<h3 style="font-size: 21px; margin-top: 40px; margin-bottom: 30px;font-weight: 400;">
								Beds
							</h3>
							<div id="slider-range"></div>
							<div id="am2">
								<p class="grey" id="am01" style="float:left; margin-left: -6px; margin-top: 0px;">
									<b>1</b>
								</p>
								<p id="amount-1" style="border:0; color:rgb(22, 160, 133); font-weight:bold; margin-top:5px;"></p>
								<p id="amount-2" style="border:0; color:rgb(22, 160, 133); font-weight:bold; margin-top:-30px;"></p>
								<p class="grey" id="am02" style="float:right;margin-top: -30px; margin-right: -2px;">
									<b>8</b>
								</p>
							</div>	
						</div>	
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="col-sm-10" style="padding: 0">
							<h3 style="font-size: 21px; margin-top: 40px; margin-bottom: 30px;font-weight: 400;">
								Price range/night
							</h3>
							<div id="slider-range1"></div>
							<div id="am2">
								<p class="grey" id="am11" style="float:left; margin-left: -13px; margin-top: 0px;">
									<b>50€</b>
								</p>
								<p id="amount1-1" style="border:0; color:rgb(22, 160, 133); font-weight:bold; margin-top:5px; margin-left:-8px;"></p>
								<p id="amount1-2" style="border:0; color:rgb(22, 160, 133); font-weight:bold; margin-top:-30px;margin-left:-8px;"></p>
								<p class="grey" id="am12" style="float:right;margin-top: -30px; margin-right: -18px; ">
									<b>500€</b>
								</p>
							</div>
						</div>
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col-sm-12">
					<div class="pageline"></div>
				</div>
			</div>
			<div class="results">
				<!-- REZULTATI-->
			</div>
		</div>
	</section>
	<footer class="bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="text-center green" style="font-weight: normal;">Individual copyright</h3>
					<p class="text-center green">All rights reserved</p>
				</div>
			</div>
		</div>
	</footer>
</body>

	<script>
	
	function sendDb(){
		var dateFrom = document.getElementsByName("datefrom")[0].value;
		var dateTo = document.getElementsByName("dateto")[0].value;
		var guests = document.getElementsByName("guests")[0].value;
		var rooms = $('#slider-range-min').slider("option", "value");
		var bedsMin = $('#slider-range').slider("option", "values")[0];
		var bedsMax = $('#slider-range').slider("option", "values")[1];
		var priceMin = $('#slider-range1').slider("option", "values")[0]*10;
		var priceMax = $('#slider-range1').slider("option", "values")[1]*10;
		var city = ($(".destination>h2").text()).trim();
		var stringsend = "datefrom=" + dateFrom +"&dateto=" + dateTo +"&guests=" + guests +"&room=" + rooms +"&bedsMin="	+ bedsMin + "&bedsMax=" + bedsMax + "&priceMin=" + priceMin + "&priceMax=" + priceMax + "&city=" + city;
		if (window.XMLHttpRequest) {
    	xajax = new XMLHttpRequest();
    } else {
			//IE6, IE5
			xajax = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xajax.open("POST", "listingDb.php", true);
		xajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xajax.send(stringsend);
		xajax.onreadystatechange = function() {
			if (xajax.readyState == 4 && xajax.status == 200) {
				console.log(xajax.responseText);
				$(".results").html(xajax.responseText);
				$(".box").css("height", $(".box").width() + "px");
				$(".boxheader").css("height", $(".box").width() * 0.45 + "px");
				$(".boxfooter").css("height", $(".box").width() * 0.11 + "px");
				$(".boxbody").css("height", $(".box").width() * 0.44 + "px");
			}
		};
		
	}
	$(document).ready(function(){
      $(".boxfooter button").css("margin-top", $(".boxfooter").height()/2-8.5+"px");
			$(".boxfooter button").css("padding-right", $(".boxfooter").height()/2-8.5+"px");
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
						h=new Date(date.getTime() + 24 * 60 * 60 * 1000);
						day  = date.getDate(),  
						month = date.getMonth() + 1,              
						year =  date.getFullYear();
						$('#calendar2').datepicker('option', 'minDate', h).next("#date").attr('id', 'dateto').addClass("grey");
						var d = $("#calendar2").datepicker('getDate'),
								da  = d.getDate(),  
								mon = d.getMonth() + 1,              
								yea =  d.getFullYear();
								if(da<10){
									da="0"+da;
								}
								if(mon<10){
									mon="0"+mon;
								}
								yea =yea.toString().substr(2,2);
						$("#dateto").text(da + '/' + mon + '/' + yea);
						if(day<10){
							day="0"+day;
						}
						if(month<10){
							month="0"+month;
						}
						year =year.toString().substr(2,2);
				$("#datefrom").text(day + '/' + month + '/' + year);
				sendDb();
		}
	}).next("#date").attr('id', 'datefrom').addClass("grey");
		
	$('#calendar2').datepicker({
		dateFormat: 'mm/dd/yy',
		inline: true,
		showOn: 'button',
		firstDay: 1,
		showAnim: 'slideDown',
		minDate: new Date(new Date(new Date()).getTime() + 24 * 60 * 60 * 1000),
		onSelect: function(dateText, inst) { 
						
						var date = $(this).datepicker('getDate'),
						day  = date.getDate(),  
						month = date.getMonth() + 1,              
						year =  date.getFullYear();
						if(day<10){
							day="0"+day;
						}
						if(month<10){
							month="0"+month;
						}
						year =year.toString().substr(2,2);
				$("#dateto").text(day + '/' + month + '/' + year);
			sendDb();
		}
	}).next("#date").attr('id', 'dateto').addClass("grey");
		
		$('#calendar').datepicker("setDate", new Date(new Date()));
		$('#calendar2').datepicker("setDate", new Date(new Date(new Date().getTime() + 24 * 60 * 60 * 1000)));
		$(".guests").val(<?php echo $_POST["guests"]; ?>);
		
	</script>
</html>