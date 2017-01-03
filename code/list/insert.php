<?php 


$mysqli = new mysqli('133.130.118.67','test','Tmtmwl2016!','food');
//$mysqli = new mysqli('localhost','root','','food');
if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

//$q = "INSERT into restaurant_list (res_name, res_addr, res_phone, res_type) values ('서부면옥', '서울특별시 광진구 구의동 80번지 47호', '02 4578319', '한식');";
//$mysqli->query( $q);
$mysqli->close();


$start = 1;
$end = 1000;
$cnt = 0;
$url1 = 'http://openAPI.gwangjin.go.kr:8088/44465a6875686f793934757579434b/json/GwangjinFoodHygieneBiz/';
$result = "";

/* 요청 보내고 정보 받아오기*/ 
while ($start < 20000){
	$send = $url1.$start.'/'.$end.'/';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $send);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$get = curl_exec($ch);
	curl_close($ch);

	$get = json_decode($get);
	
	$get = $get->GwangjinFoodHygieneBiz;

	// 받아온 1000개의 정보 정리
	for ($cnt=0 ; $cnt<1000 ; $cnt++){
		$sort = $get->row[$cnt];
		if (!strstr($sort->DCB_GBN_NM, "폐업") && !strstr($sort->SNT_UPTAE_NM, "제조") && (strstr($sort->SITE_ADDR, "군자동") || strstr($sort->SITE_ADDR, "화양동") || strstr($sort->SITE_ADDR, "군자동")) && (strstr($sort->SNT_UPTAE_NM, "한식") || strstr($sort->SNT_UPTAE_NM, "양식") || strstr($sort->SNT_UPTAE_NM, "중국식") || strstr($sort->SNT_UPTAE_NM, "분식") || strstr($sort->SNT_UPTAE_NM, "일식") || strstr($sort->SNT_UPTAE_NM, "까페") || strstr($sort->SNT_UPTAE_NM, "통닭") || strstr($sort->SNT_UPTAE_NM, "김밥") || strstr($sort->SNT_UPTAE_NM, "기타") || strstr($sort->SNT_UPTAE_NM, "단란주점") || strstr($sort->SNT_UPTAE_NM, "소주방") && strstr($sort->SNT_UPTAE_NM, "전통찻집") || strstr($sort->SNT_UPTAE_NM, "외국음식전문점"))){
			echo $sort->UPSO_NM.'<br/>';
			echo $sort->UPSO_SITE_TELNO.'<br/>';
			echo $sort->SITE_ADDR.'<br/>';
			echo $sort->SNT_UPTAE_NM.'<br/></br>';

			$mysqli = new mysqli('133.130.118.67','test','Tmtmwl2016!','food');
			if (mysqli_connect_error()) {
    			exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
			}
			$sql = "INSERT INTO restaurant_list (res_name, res_addr, res_phone, res_type) VALUES ('".$sort->UPSO_NM."', '".$sort->SITE_ADDR."', '".$sort->UPSO_SITE_TELNO."', '".$sort->SNT_UPTAE_NM."');";
			echo $sql;
			$mysqli->query( $sql);
			$mysqli->close();
		}
	}

	if (!strstr($get->RESULT->CODE, "INFO-000")){
		break;
	}

	$start += 1000;
	$end += 1000;
}

 ?>
