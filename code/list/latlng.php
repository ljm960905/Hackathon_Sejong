<?php
$id = 1;
while(1){
	
	$mysqli = new mysqli('133.130.118.67','test','Tmtmwl2016!','food');
	if (mysqli_connect_error()) {
	    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
	}
	$q = "SELECT res_addr from restaurant_list where idx=".$id.";";
	echo $q;
	$addr = $mysqli->query( $q);
	$mysqli->close();
	$addr = $addr->fetch_array();
	echo $addr['res_addr'];
	if(empty($addr['res_addr']))
		break;

	  $client_id = "aFu4LZbC8kSwUv97CtZu";
	  $client_secret = "JD86cnKdy8";
	  $encText = urlencode($addr['res_addr']);
	  $url = "https://openapi.naver.com/v1/map/geocode?query=".$encText; 

	  $is_post = false;
	  $ch = curl_init();
	  curl_setopt($ch, CURLOPT_URL, $url);
	  curl_setopt($ch, CURLOPT_POST, $is_post);
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  $headers = array();
	  $headers[] = "X-Naver-Client-Id: ".$client_id;
	  $headers[] = "X-Naver-Client-Secret: ".$client_secret;
	  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	  $response = curl_exec ($ch);
	  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	  echo "status_code:".$status_code."<br>";
	  curl_close ($ch);
	  if($status_code == 200) {
	    $result = json_decode($response);
	    $result = $result->result->items[0]->point;
	    echo $result->x;
	    echo "</br>";
	    echo $result->y;
    
	    $mysqli = new mysqli('133.130.118.67','test','Tmtmwl2016!','food');

		if (mysqli_connect_error()) {
	    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
		}

		$q = "UPDATE restaurant_list SET res_coord_lat=".$result->x.", res_coord_lng=".$result->y." WHERE idx=".$id.";";
		echo $q;
		$mysqli->query( $q);
		$mysqli->close();

	  } else {
	    echo "Error 내용:".$response;
	  }
	$id += 1;
	}
?>
