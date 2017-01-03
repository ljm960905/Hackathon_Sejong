<?php 
function _deg2rad($deg) { 
$radians = 0.0; 
$radians = $deg * M_PI/180.0; 
return($radians); 
} 

function geoDistance($lat1, $lon1, $lat2, $lon2, $unit="k") { 
$theta = $lon1 - $lon2; 
$dist = sin(_deg2rad($lat1)) * sin(_deg2rad($lat2)) + cos(_deg2rad($lat1)) * cos(_deg2rad($lat2)) * cos(_deg2rad($theta)); 
$dist = acos($dist); 
$dist = rad2deg($dist); 
$miles = $dist * 60 * 1.1515; 
$unit = strtolower($unit); 

if ($unit == "k") { 
return ($miles * 1.609344); 
} else { 
return $miles; 
} 
} 
// gps 거리 계산	

$lt = 37.5517990;
$lg = 127.0736330;  // 세종



$id = 1;
while(1){
	
	$mysqli = new mysqli('133.130.118.67','test','Tmtmwl2016!','food');
	if (mysqli_connect_error()) {
	    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
	}
	$q = "SELECT res_coord_lat, res_coord_lng from restaurant_list where idx=".$id.";";
	echo $q;
	$addr = $mysqli->query( $q);
	$mysqli->close();
	$addr = $addr->fetch_array();
	echo $addr['res_coord_lat'].' '.$addr['res_coord_lng'];
	if(empty($addr))
		break;

	$d_m = geoDistance($addr['res_coord_lng'], $addr['res_coord_lat'], $lt, $lg) * 1000;
	echo $d_m;
	 
	  $mysqli = new mysqli('133.130.118.67','test','Tmtmwl2016!','food');

		if (mysqli_connect_error()) {
	    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
		}

		$q = "UPDATE restaurant_list SET res_tag='".$d_m."' WHERE idx=".$id.";";
		echo $q;
		$mysqli->query( $q);
		$mysqli->close();
	$id += 1;
	}



 ?>
