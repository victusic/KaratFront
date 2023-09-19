<?php
	$f = fopen('http://localhost:64873/api/Advertisements', 'r');
	$data = stream_get_contents($f);
	 
	if ($data) {
		$msv = json_decode($data, true);

		$Clvl = count($msv);

		header('Content-Type: application/json');

		$result = array();

		for ($i = 0; $i <= ($Clvl); $i++) {
			array_push($result, (array("Id" => $msv[$i]['AdverId'], "Name" => $msv[$i]['Name'], "Photo" => $msv[$i]['Photo'], "Price" => $msv[$i]['Price'], "Location" => $msv[$i]['Location'], "Description" => $msv[$i]['Description'])));
		}

		$result['Count'] = $Clvl;
		
		echo json_encode($result);
	}
?>