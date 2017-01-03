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

									<li class="icon fa-desktop">
										<a href="play.php" method="post">
										<h3>PC방</h3>
										<p>학교 주변 PC방 정보를 알려드립니다.</p>
										</a>
									</li>

									<li class="icon fa-dot-circle-o">
										<a href="play1.php">
										<h3>당구장</h3>
										<p>학교 주변에 당구장 정보를 알려드립니다.</p>
										</a>
									</li>

									<li class="icon fa-soundcloud">
										<a href="play2.php">
										<h3>노래방</h3>
										<p>학교 주변에 노래방 정보를 알려드립니다.</p>
										</a>
									</li>
									<li class="icon fa-coffee">
										<a href="play3.php">
										<h3>카페</h3>

										<p>학교 주변에 카페 정보를 알려드립니다.</p>
										</a>
									</li>
                  <li class="icon fa-child">
										<a href="play4.php">
										<h3>어린이대공원</h3>
										<p>학교 주변에 어린이대공원 정보를 알려드립니다.</p>
										</a>
									</li>
									<li class="icon fa-random">
										<?php
										$result = mt_rand(0,4);
										?>
										<?php if ($result == 0):

										?>
										<a href="play.php">
										<?php elseif ($result == 1):

										?>
										<a href="play1.php">
										<?php elseif ($result == 2):

										?>
										<a href="play2.php">
										<?php elseif ($result == 3):

										?>
										<a href="play3.php">
                    <?php elseif ($result == 4):

                    ?>
                    <a href="play4.php">
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
