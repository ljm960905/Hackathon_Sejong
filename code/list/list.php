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


						<section id="three" class="wrapper style3 special">
							<div class="inner">
								<header class="major">
									<h2>오늘은 뭐하지?</h2>
									<p>고민중인 당신에게 해결을!</p>
								</header>
								<ul class="features">

									<li class="icon fa-cutlery">
										<a href="div_food.php">
										<h3>뭐 먹지?</h3>
										<p>학교 주변 식당 정보를 알려드립니다.</p>
										</a>
									</li>

									<li class="icon fa-futbol-o">
										<a href="div_play.php">
										<h3>뭐하고 놀지?</h3>
										<p>학교 주변에 놀거리들을 전부 알려드립니다!</p>
										</a>
									</li>

									<li class="icon fa-graduation-cap">
										<a href="study.php">
										<h3>어디서 공부하지?</h3>
										<p>학술정보원 열람실 정보를 알려드립니다.</p>
										</a>
									</li>
									<li class="icon fa-home">
										<a href="home.php">
										<h3>집에 갈까?</h3>
										<p>집까지 가는 방법을 알려드립니다!</p>
										</a>
									</li>
									<li class="icon fa-random">
										<?php
										$result = mt_rand(0,3);
										?>
										<?php if ($result == 0):

										?>
										<a href="food.php">
										<?php elseif ($result == 1):

										?>
										<a href="div_play.php">
										<?php elseif ($result == 2):

										?>
										<a href="study.php">
										<?php elseif ($result == 3):

										?>
										<a href="home.php">
										<?php endif ?>
										<h3>랜덤</h3>
										<p>랜덤으로 하나를 골라서 정해드립니다!</p>
										</a>
									</li>
									<li class="icon fa-cog">
										<a href="user_inform_change.php">
										<h3>개인정보변경</h3>
										<p>비밀번호 및 기타 정보를 변경하려면 이곳을 눌러주세요.</p>
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
