<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="/assets/img/#">
	<title>Individual</title>
	<meta charset="utf-8">
	<meta name="description" content="#"></meta>
	<meta name="keywords" content="#"></meta>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/listing_details.css">
	<script src="assets/jquery/main.js"></script>
	<script src="./assets/jquery/datepicker.js"></script>
<script src="./assets/js/main.js"></script>
	<script src="assets/js/date.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAgMXD4uLW8_1h48PFfPN4Tft4Pubi6jsM"></script>

</head>

<body onload="setcurdate2('<?php echo $_POST[" datefrom "]; ?>', '<?php echo $_POST["dateto "]; ?>');">
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
							<?php echo "John Doe"; //TODO display user name ?>
							<?php echo $_GET["id"]; ?>
						</p>
						<img src="./assets/img/profile.jpg" class="img-responsive img-circle center">
					</div>
				</div>
			</div>
		</div>
	</nav>
	<header class="ldetails">
		<div class="modal fade" id="myMapModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title"><?php echo $_POST["city"]; ?></h4>

					</div>
					<div class="modal-body">
						<div class="container">
							<div class="row">
								<div class="center">
									<div id="map-canvas" class=""></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="ldetailssec">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="grey" style="margin-top: 0;">
							<?php echo "Flat in the center of Umag"; //TODO display header ?>
						</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<img src="./assets/img/location.PNG" style="display: inline-block; vertical-align: bottom;" class="img-responsive" data-toggle="modal" data-target="#myMapModal">
							<p style="display:inline-block; font-size: 18px; margin-top: 8px; margin-left: 12px;" class="grey" data-toggle="modal" data-target="#myMapModal">
								<?php echo "202 Cummerata Avenue Apt. 964"; //TODO display adress?>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-4">
							<img src="./assets/img/sofa.png" style="margin-top: 20px; margin-left: 14px;margin-bottom: 6px; max-height: 21px;" class="img-responsive">
							<p class="grey" style="font-size: 18px;">
								<?php echo 2; //TODO display num of rooms?> Rooms
							</p>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-4">
							<img src="./assets/img/bed.png" style="margin-top: 20px; margin-left: 10px; margin-bottom: 5px;max-height: 23px;" class="img-responsive">
							<p class="grey" style="font-size: 18px;">
								<?php echo 4; //TODO display num of beds?> Beds
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-8 col-xs-8">
							<div class="ldetailsline"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<p style="color: rgb(160,160,160);margin-bottom: 30px; font-size: 17px;">
								<?php echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus egestas sagittis nibh eu molestie."; //TODO display description ?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-5">
					<form action="./payment.php" method="GET">
						<div class="listingbox">
							<div class="listingheader">
								<p class="white" style="margin:0;font-weight: 300;">
									<span class="listingcost">
									<?php echo 99; //TODO display price per night?>€
								</span>
									<span style="float:right;margin-top: 8px;">Per Night</span>
								</p>
							</div>
							<div class="listingbody">
								<div class="listingdate">
									<div class="listingdatefrom">
										<p class="green text-center" style="margin-bottom: 5px;font-weight: bold;font-size: 10px;">
											CHECK IN
										</p>
										<div style="font-size: 16px;font-weight: 300;">
											<input type='text' id='calendar' name="datefrom" style="display: none" />
										</div>
									</div>
									<div class="listingdateto" style="font-size: 16px;font-weight: 300;">
										<p class="green text-center" style="margin-bottom: 5px;font-weight: bold;font-size: 10px;">
											CHECK OUT
										</p>
										<div style="font-size: 16px;font-weight: 300;">
											<input type='text' id='calendar2' name="dateto" style="display: none" />
										</div>
									</div>
								</div>
								<div class="listingguests">
									<select class="lguests grey" name="guests" style="border: 0;">
										
									</select>
								<input style="display:none;" name="apartmentId" value=
									<?php echo $_GET["id"]; ?>
								>
								</div>
								<div class="listingbook">
									<button class="listingbookbtn" type="submit" style="font-weight: 300;">
									Book now
								</button>
								</div>
								<div class="listingchat">
									<a href="#" class="grey">Have a question? Let's chat</a>
								</div>
							</div>
						</div>
					</form>
				</div>
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
	maxGuests(<?php echo 25; ?>)
	function maxGuests(max){
		for (i=1; i<=max; i++) {
			if(i==1){
				$("select").append("<option value="+i+">"+i+" Guest</option>");
			}else{
				$("select").append("<option value="+i+">"+i+" Guests</option>");	
			}
		}
	}
	var start = '<?php echo $_POST["datefrom"]; ?>';
	var end = '<?php echo $_POST["dateto"]; ?>';
	var d;
	var s;
	if (start) {
		if (end) {
			d = new Date(end);
			s = new Date(start);
		} else {
			d = new Date(new Date(start).getTime() + 24 * 60 * 60 * 1000);
			s = new Date(start);
		}
	} else {
		if (end) {
			d = new Date(end);
			s = new Date(new Date(end).getTime() - 24 * 60 * 60 * 1000);
		} else {
			d = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
			s = new Date();
		}
	}
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
			console.log(h);
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
		minDate: new Date(s.getTime() + 24 * 60 * 60 * 1000),
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

	$('#calendar').datepicker("setDate", s);
	$('#calendar2').datepicker("setDate", d);
	$(".lguests").val(<?php echo $_POST["guests"]; ?>);
</script>
<script>
	var map;
	var myCenter = new google.maps.LatLng(<?php echo 53; //TODO display Lat ?>, <?php echo -1.33; //TODO display Lng ?>);
	var marker = new google.maps.Marker({
		position: myCenter
	});

	function initialize() {
		var mapProp = {
			center: myCenter,
			zoom: 14,
			draggable: true,
			scrollwheel: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		map = new google.maps.Map(document.getElementById("map-canvas"), mapProp);
		marker.setMap(map);

		google.maps.event.addListener(marker, 'click', function() {

			infowindow.setContent(contentString);
			infowindow.open(map, marker);

		});
	};
	google.maps.event.addDomListener(window, 'load', initialize);

	google.maps.event.addDomListener(window, "resize", resizingMap());

	$('#myMapModal').on('show.bs.modal', function() {
		//Must wait until the render of the modal appear, thats why we use the resizeMap and NOT resizingMap!! ;-)

		resizeMap();

	})

	function resizeMap() {
		if (typeof map == "undefined") return;
		setTimeout(function() {
			resizingMap();
		}, 400);

	}

	function resizingMap() {
		if (typeof map == "undefined") return;
		var center = map.getCenter();
		$("#map-canvas").css("width", $(".modal-body").width() + "px");
		google.maps.event.trigger(map, "resize");
		map.setCenter(center);

	};
</script>
</html>