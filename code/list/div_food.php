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


						<section id="three" class="wrapper style4 special">
							<div class="inner">
								<header class="major">
									<h2>오늘은 뭐하지?</h2>
									<p>고민중인 당신에게 해결을!</p>
								</header>
								<ul class="features">

									<li class="icon fa-cutlery">
										<a href="food.php">
										<h3>전체</h3>
										<p>학교 주변 음식점 정보를 알려드립니다.</p>
										</a>

									</li>

									<li class="icon fa-cutlery">
										<a href="food_select_1.php">
										<h3>한식</h3>
										<p>학교 주변에 한식집 정보를 알려드립니다.</p>

										</a>
									</li>

									<li class="icon fa-cutlery">
										<a href="food_select_2.php">
										<h3>양식</h3>
										<p>학교 주변에 양식 정보를 알려드립니다.</p>
										</a>
									</li>
									<li class="icon fa-cutlery">
										<a href="food_select_3.php">
										<h3>중식</h3>

										<p>학교 주변에 중식 정보를 알려드립니다.</p>
										</a>
									</li>
                  <li class="icon fa-cutlery">
									<a href="food_select_4.php">
										<h3>일식</h3>
										<p>학교 주변에 일식 정보를 알려드립니다.</p>
										</a>
									</li>
									<li class="icon fa-cutlery">

                  <a href="food_select_5.php">

										<h3>분식</h3>
										<p>학교 주변에 분식 정보를 알려드립니다.</p>
										</a>
									</li>

								</ul>
								<a href="food_select_rand.php" class = "button">랜덤</a>
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
