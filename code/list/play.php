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

            <div id="map" style="width:100%;height:500px;"></div>

            <script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=b8511d6053fb1b26bdc86b82014c8545&libraries=services"></script>
            <script>
            // 마커를 클릭하면 장소명을 표출할 인포윈도우 입니다
            var infowindow = new daum.maps.InfoWindow({zIndex:1});

            var mapContainer = document.getElementById('map'), // 지도를 표시할 div
                mapOption = {
                    center: new daum.maps.LatLng(37.566826, 126.9786567), // 지도의 중심좌표
                    level: 3 // 지도의 확대 레벨
                };

            // 지도를 생성합니다
            var map = new daum.maps.Map(mapContainer, mapOption);

            // 장소 검색 객체를 생성합니다
            var ps = new daum.maps.services.Places();

            // 키워드로 장소를 검색합니다
            ps.keywordSearch('세종대 PC방', placesSearchCB);

            // 키워드 검색 완료 시 호출되는 콜백함수 입니다
            function placesSearchCB (status, data, pagination) {
                if (status === daum.maps.services.Status.OK) {

                    // 검색된 장소 위치를 기준으로 지도 범위를 재설정하기위해
                    // LatLngBounds 객체에 좌표를 추가합니다
                    var bounds = new daum.maps.LatLngBounds();

                    for (var i=0; i<data.places.length; i++) {
                        displayMarker(data.places[i]);
                        bounds.extend(new daum.maps.LatLng(data.places[i].latitude, data.places[i].longitude));
                    }

                    // 검색된 장소 위치를 기준으로 지도 범위를 재설정합니다
                    map.setBounds(bounds);
                }
            }

            // 지도에 마커를 표시하는 함수입니다
            function displayMarker(place) {

                // 마커를 생성하고 지도에 표시합니다
                var marker = new daum.maps.Marker({
                    map: map,
                    position: new daum.maps.LatLng(place.latitude, place.longitude)
                });

                // 마커에 클릭이벤트를 등록합니다
                daum.maps.event.addListener(marker, 'click', function() {
                    // 마커를 클릭하면 장소명이 인포윈도우에 표출됩니다
                    infowindow.setContent('<div style="padding:5px;font-size:12px;">' + place.title + '</div>');
                    infowindow.open(map, marker);
                });
            }
            </script>



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
