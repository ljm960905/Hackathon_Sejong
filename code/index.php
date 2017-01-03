<!DOCTYPE HTML>

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
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
				<?php
		    include $_SERVER['DOCUMENT_ROOT'].'/header.php';
		    ?>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>아뭐하지?</h2>
							<p>하루를 보내는 또 다른 방법</p>
							<ul class="actions">
								<li><a href="login/login_main.php" class="button special">로그인</a></li>
							</ul>
						</div>
						<a href="#one" class="more scrolly">더 알아보기</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>오늘은 또 뭐하지?</h2>
								<p>어디가서 뭐하지? 어디가서 뭐먹지? 어디가서 공부하지? <br /> 이런 고민들을 싹 해결해 드리겠습니다.</p>
							</header>
							<ul class="icons major">
								<li><span class="icon fa-cutlery major style1"><span class="label">음식</span></span></li>
								<li><span class="icon fa-futbol-o major style2"><span class="label">문화</span></span></li>
								<li><span class="icon fa-graduation-cap major style3"><span class="label">공부</span></span></li>
							</ul>
						</div>
					</section>

				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2>무료한 대학생활 오늘은 뭐하지?</h2>
								<p>이런 고민끝에 나온 서비스입니다</p>
							</header>
							<ul class="actions vertical">
								<li><a href="/list/notice.php" class="button fit special">문의하기</a></li>
								<li><a href="/list/notice.php" class="button fit">소개</a></li>
							</ul>
						</div>
					</section>

				<!-- Footer -->
				<?php
				include $_SERVER['DOCUMENT_ROOT'].'/footer.php';
				?>

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
