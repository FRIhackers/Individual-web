<?php
//PODATKI K SE SUBMITAJO PA JIH BOŠ RABU ZA POGOJE
$dateFrom = $_POST["datefrom"];
$dateTo = $_POST["dateto"];
$guests = $_POST["guests"];
$room = $_POST["room"];
$bedsMin = $_POST["bedsMin"];
$bedsMax = $_POST["bedsMax"];
$priceMin = $_POST["priceMin"];
$priceMax = $_POST["priceMax"];
$city = $_POST["city"];
$i=0;
$results = array(
	array("id"=>1, "name"=>"Umag", "description"=>"2 bedroom flat in the city center", "room"=>2, "bed"=>5, "price"=>100, "image"=>"boxbg.JPG"),
	array("id"=>2, "name"=>"Portorož", "description"=>"2 bedroom flat in the city center", "room"=>4, "bed"=>2, "price"=>99, "image"=>"piran.JPG"),
	array("id"=>3, "name"=>"Izola", "description"=>"2 bedroom flat in the city center", "room"=>8, "bed"=>4, "price"=>256, "image"=>"izola.JPG"),
	array("id"=>4, "name"=>"Pula", "description"=>"2 bedroom flat in the city center", "room"=>1, "bed"=>7, "price"=>425, "image"=>"boxbg.JPG"),
	array("id"=>5, "name"=>"Kanegra", "description"=>"2 bedroom flat in the city center", "room"=>3, "bed"=>1, "price"=>51, "image"=>"izola.JPG")
);

if(count($results)!="0"){
	foreach ($results as $row) {
		$delimiter=$i%3;
		if($delimiter=="0"){
			echo '<div class="row">';
		}
		$price=$row["price"];
		if($price<"100"){
			$price="&nbsp&nbsp" . $price;
		}
		echo '<div class="col-md-4 col-sm-6">
							<div class="col-sm-12 box">
								<div class="boxheader" style="background-image: url(\'./assets/img/db/' . $row["image"] . '\');">
									<div class="pricearea">
										<p class="white" style="font-weight: 300;">
											' . $price . ' <span>per night</span>
										</p>
									</div>
								</div>
								<div class="boxbody">
									<h4 style="font-weight: 400;">' . $row["name"] . '</h4>
									<p>' . $row["description"] . '</p>
									<div class="inline">
										<div>
											<img src="./assets/img/sofa.png" class="center img-responsive" style="max-height:14px;margin-bottom: 11px;">
											<h6 style="font-weight: 400;">' . $row["room"] . ' Rooms</h6>
										</div>
										<div>
											<img src="./assets/img/bed.png" class="center img-responsive" style="max-height:15px;margin-bottom: 10px;">
											<h6 style="font-weight: 400;">' . $row["bed"] . ' Beds</h6>
										</div>
									</div>
								</div>
								<div class="boxfooter">
									<button style="font-weight: normal;" type="submit" form="mainform" formaction="./listing_details.php?id=
										' . $row["id"] . '
									" class="green">VIEW DETAILS</button>
								</div>
							</div>
						</div>';
		if($delimiter=="2"){
			echo '</div>';
		}
		$i++;
	}
}else{
	echo "<h1 class='text-center' style='color: rgb(22,160,133);'>No Results</h1>";
}

?>