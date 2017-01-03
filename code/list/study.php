<!DOCTYPE HTML>
<?php
@session_start();
if($_SESSION['is_logged']=='YES') {
//Header("Location: index.php");
}
else {
	Header("Location: ../index.php");
}

$url = 'http://210.107.226.14/seat/domian5.asp';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);
$result = iconv("EUC-KR", "UTF-8", $result);
$result = str_replace("<META http-equiv=\"refresh\" content=\"60; url=./domian5.asp\" >", "", $result);
//echo $result;
$result = strip_tags($result);


$name = array('A열람실', 'B열람실', 'C열람실', 'D열람실A', 'D열람실B', '3층열람실A', '3층열람실B');

for ($i=0 ; $i<7 ; $i++){ // 각 열람실 정보 ($i번째 열람실)
  //문자열 정리
  $result = strstr($result, $name[$i]);
  $sort = explode(' ', $result);


  $print = explode('&nbsp;', $sort[0]);

  for ($j=0 ; $j<4 ; $j++) //[] - 0:열람실 이름 | 1:전체 좌석수 | 2:사용좌석수 | 3: 그외
  {
    $save[$i][$j] = $print[$j];
    //echo $print[$j]."</br>";
  }
}


?>

<html>
	<head>
		<title>아뭐하지?</title>
		<meta charset="utf-8" />
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

						<section id="three" class="wrapper style4 special">
							<div class="inner">
								<header class="major">
									<h2>오늘은 뭐하지?</h2>
									<p>고민중인 당신에게 해결을!</p>
								</header>
								<ul class="features">

									<li class="icon fa-book">
										<a href="./room.php?id=1">
										<h3>A열람실</h3>
										<p><?php echo $save['0']['3']."/ "; echo $save['0']['1'];?></p>
										</a>
									</li>

									<li class="icon fa-book">
										<a href="./room.php?id=2">
										<h3>B열람실</h3>
										<p><?php echo $save['1']['3']."/ "; echo $save['1']['1'];?></p>
										</a>
									</li>

									<li class="icon fa-book">
										<a href="./room.php?id=3">
										<h3>C열람실</h3>
										<p><?php echo $save['2']['3']."/ "; echo $save['2']['1'];?></p>
										</a>
									</li>
									<li class="icon fa-book">
										<a href="./room.php?id=4">
										<h3>D열람실A</h3>
                    <p><?php echo $save['3']['3']."/ "; echo $save['3']['1'];?></p>
										</a>
									</li>
                  <li class="icon fa-book">
										<a href="./room.php?id=5">
										<h3>D열람실B</h3>
										<p><?php echo $save['4']['3']."/ "; echo $save['4']['1'];?></p>
										</a>
									</li>
                  <li class="icon fa-book">
										<a href="./room.php?id=6">
                    <h3>3층열람실A</h3>
                    <p><?php echo $save['5']['3']."/ "; echo $save['5']['1'];?></p>
										</a>
                  </li>
                  <li class="icon fa-book">
										<a href="./room.php?id=7">
                    <h3>3층열람실B</h3>
                    <p><?php echo $save['6']['3']."/ "; echo $save['6']['1'];?></p>
										</a>
                  </li>
									<li class="icon fa-random">
										<?php
										$result = mt_rand(0,6);
										?>
										<?php if ($result == 0):
										?>
										<a href="./room.php?id=1">
										<?php elseif ($result == 1):

										?>
										<a href="./room.php?id=2">
										<?php elseif ($result == 2):

										?>
										<a href="./room.php?id=3">
										<?php elseif ($result == 3):

										?>
										<a href="./room.php?id=4">
                    <?php elseif ($result == 4):

                    ?>
                    <a href="./room.php?id=5">
										<?php elseif ($result == 5):

										?>
										<a href="./room.php?id=6">
										<?php elseif ($result == 6):

										?>
										<a href="./room.php?id=7">
										<?php endif ?>
										<h3>랜덤</h3>
										<p>랜덤으로 하나를 골라서 정해드립니다!</p>
										</a>
									</li>

								</ul>
							</div>
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
