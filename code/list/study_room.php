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

//  for ($j=0 ; $j<4 ; $j++) //[] - 0:열람실 이름 | 1:전체 좌석수 | 2:사용좌석수 | 3: 그외
  //  echo $print[$j]."</br>";

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

                <table>
                  <tr>

                    <td>

                <table width='1000' border='0' cellspacing='0' cellpadding='0' bbgcolor='#000000'>
                  <tr>
                    <td width=100%>
                      <table width=100% border=0><tr>
                        <td align=left width=50%>
                              <a href="javascript:history.back();"><img src="./images/before.gif" border=0></a>&nbsp;
                        </td>
                        <td align="right" width=50%>
                          <font style='color:black;font-size:9pt;font-weight:900;'>사용중 색상 &nbsp;&nbsp;&nbsp; 미사용 색상 </font><table width=165 height=21 border='0' cellpadding='0' cellspacing='0'>
                            <tr><td width=70 bgcolor='red' align='center' valign='middle'><font style='colzor:yellow;font-size:8pt;font-weight:900;'>사용중</font></td>
                            <td width=25></td><td width=70 bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:8pt;font-weight:900;'>미사용</font></td></tr></table>
                        </td>
                      </tr></table>
                    </td>
                  </tr>

                <?php

                $url = 'http://210.107.226.14/seat/roomview5.asp?room_no=1';


                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $result = curl_exec($ch);
                curl_close($ch);
                $result = iconv("EUC-KR", "UTF-8", $result);
                //echo $result;

                $for_print = strstr($result, "<tr><!-- 1009 * 602 -->");

                echo $for_print;


                ?>

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
