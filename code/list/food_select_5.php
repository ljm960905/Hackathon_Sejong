<!DOCTYPE HTML>
<?php
@session_start();
if($_SESSION['is_logged']=='YES') {
//Header("Location: index.php");
}
else {
	Header("Location: ../index.php");
}

extract($__GET);
extract($__POST);
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
						</header>

						<section class="wrapper style3">

							<?php
							$mysqli = new mysqli('133.130.118.67','test','Tmtmwl2016!','food');
							//$mysqli = new mysqli('localhost','root','','food');
							if (mysqli_connect_error()) {
									exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
							}

							$q = "SELECT * FROM restaurant_list WHERE res_type ='분식'";
							$result = $mysqli->query( $q);
							$total_record = $result->num_rows;
							?>

							<?php if($total_record==0): ?>
								글이 없습니다.
							<?php endif ?>

							<?php
								if( isset($_GET['page']) ) {
									$now_page = $_GET['page'];
							}
							else {
									$now_page = 1;
							}
							$record_per_page = 10;
							$start_record = $record_per_page*($now_page-1);
							$record_to_get = $record_per_page;

							if( $start_record+$record_to_get > $total_record) {
								$record_to_get = $total_record - $start_record;
							}

							$q = "SELECT * FROM restaurant_list WHERE res_type='분식' ORDER BY idx DESC LIMIT $start_record, $record_to_get";
							$result = $mysqli->query($q);
								?>

<table class="table">
	<thead>
			<th>가게명</th>
			<th>주소</th>
			<th>업종</th>
	</thead>

	<?php while($data = $result->fetch_array()): ?>
	<tr>
		<td>
			<a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/list/food_view.php?idx=<?php echo $data['idx'] ?>" ><?php $filter_subject=filter_var($data['res_name'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
			echo $filter_subject; ?></a>
		</td>
		<td>
			<?php
			$filter_idx=filter_var($data['res_addr'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
			echo $filter_idx;
			?>
			</td>
		<td>
			<?php
			$filter_idx=filter_var($data['res_type'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
			echo $filter_idx;
			?>
		</td>
	</tr>
	<?php endwhile ?>
</table>


<div>
<table>
<?php
$page_per_block = 5;
$now_block = ceil($now_page / $page_per_block);
$total_page = ceil($total_record / $record_per_page);
$total_block = ceil($total_page / $page_per_block);

if(1<$now_block ) {
$pre_page = ($now_block-1)*$page_per_block;
echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/list/food.php?page='.$pre_page.'" class = "small button">이전</a>';

}

$start_page = ($now_block-1)*$page_per_block+1;
$end_page = $now_block*$page_per_block;
if($end_page>$total_page) {
$end_page = $total_page;
}

?>
<tr>
<?php for($i=$start_page;$i<=$end_page;$i++) :?>
	<td><a href="/list/food.php?id=<?php echo $id ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></td>
<?php endfor?>
</tr>
<?php
if($now_block < $total_block) {
$post_page = ($now_block)*$page_per_block+1;
echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/list/food.php?page='.$post_page.'" class = "small button">다음</a>';
}
?>
</table>
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
