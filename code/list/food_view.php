<!DOCTYPE HTML>
<?php
@session_start();
if($_SESSION['is_logged']=='YES') {
//Header("Location: index.php");
}
else {
	Header("Location: ../index.php");
}
?>
<?php
$mysqli = new mysqli('133.130.118.67','test','Tmtmwl2016!','food');
//$mysqli = new mysqli('localhost','root','','food');
if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

extract($_POST);
extract($_GET);


$q = "SELECT * FROM restaurant_list WHERE idx=$idx";
$result = $mysqli->query( $q);
$row = $result->fetch_array();

$name=$row['res_name'];
$addr=$row['res_addr'];
$phone=$row['res_phone'];
$type=$row['res_type'];
?>


<html>
	<head>
		<title>아뭐하지?</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!--<meta charset="utf-8" />-->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
        <?php
        include $_SERVER['DOCUMENT_ROOT'].'/header.php';
        ?>

				<!-- Main -->
					<article id="main">
						<header>
							<h2>아뭐하지?</h2>
              <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=y2zPuVk4_oUgnzDcZCSN"></script>
						</header>

						<section class="wrapper style3">

						<table class="table">

						    <tr>
									<td align="center">
										위치정보
									</td>
									<td>
                    <div id="map" style="width:100%;height:200px;"></div>
                    <?php
$client_id = "y2zPuVk4_oUgnzDcZCSN";
$client_secret = "Jpt5rZUvo0";
$encText = urlencode($addr);
$url = "https://openapi.naver.com/v1/map/geocode?query=".$encText; // json
// $url = "https://openapi.naver.com/v1/map/geocode.xml?query=".$encText; // xml

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
//echo "status_code:".$status_code."<br>";
curl_close ($ch);
$response = json_decode($response);
$response = $response->result->items[0]->point;


?>
   <script>
     var map = new naver.maps.Map('map', {center: new naver.maps.LatLng('<?php echo ($response->y)?>', '<?php echo ($response->x)?>')});
     var marker = new naver.maps.Marker({
       position: new naver.maps.LatLng('<?php echo ($response->y)?>', '<?php echo ($response->x)?>'),
       map: map
});
   </script>

                  </td>
								</tr>
						      <tr>
										<td align="center">
											가게 이름
										</td>
										<td>
                      <?php
                      $filter_subject=filter_var($name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
                      echo $filter_subject;
                      ?>
									</td>
									</tr>
						      <tr>
										<td align="center">
											주소
										</td>
										<td>
                      <?php
                      $filter_subject=filter_var($addr, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
                      echo $filter_subject;
                      ?>
									</td>
						      </tr>
									<tr>
										<td align="center">
											전화번호
										</td>
										<td>
                      <?php
                      $filter_subject=filter_var($phone, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
                      echo $filter_subject;
                      ?>
									</td>
									</tr>
									<tr>
										<td align="center">
											업종
										</td>
										<td>
                      <?php
                      $filter_subject=filter_var($type, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
                      echo $filter_subject;
                      ?>
									</td>
									</tr>

						    </tr>


						</table>

						<div>
						  <table>

						</table>

            </section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
