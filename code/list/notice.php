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


						<section id="three" class="wrapper style2 special">
							<div class="inner">
								<header class="major">
									<h2>오늘은 뭐하지?</h2>
									<p>문의사항은 여기로 보내주세요!</p>
								</header>
								<p>
									<article id="contact">
										<form method="post" action="mail.php">
											<div class="field half first">
												<ul>
												<h2 align = "left">
												<label for="email">보내는사람</label>
												</h2>
												</ul>
												<ul>
												<input type="text" name="email" id="email" />
												</ul>
											</div>
											<div class="field half">
												<ul><h2 align = "left">
												<label for="subject">제목</label>
												</h2></ul>
												<ul><input type="text" name="subject" id="subject" /></ul>
											</div>
											<div class="field">
												<ul><h2 align = "left">
												<label for="message">내용</label>
												</h2></ul>
												<ul><textarea name="message" id="message" rows="4"></textarea></ul>
											</div>
											<br>
											<ul class="actions">
												<li><input type="submit" value="보내기" class="special" /></li>
											</ul>
										</form>
									</article>

								</p>
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
