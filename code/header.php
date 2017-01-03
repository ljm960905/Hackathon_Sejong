<header id="header">
  <h1><a href="http://<?=$_SERVER['HTTP_HOST']?>/list/list.php">아뭐하지?</a></h1>
  <nav id="nav">
    <ul>
      <li class="special">
        <a href="#menu" class="menuToggle"><span>Menu</span></a>
        <div id="menu">
          <ul>
            <li><a href="http://<?=$_SERVER['HTTP_HOST']?>/list/list.php">아뭐하지?</a></li>
            <li><a href="http://<?=$_SERVER['HTTP_HOST']?>/list/notice.php">문의</a></li>
            <!--<li><a href="#">Sign Up</a></li>-->
            <li>
              <?php
              @session_start();
              $is_logged = $_SESSION['is_logged'];
              if($is_logged=='YES') {
                  $user_id = $_SESSION['user_id'];
                  echo "USER : ";
                  echo $user_id;}
              else {echo "GUEST";}
              ?>
            </li>

            <?php if($is_logged =='YES'): ?>
            <li><a href="http://<?=$_SERVER['HTTP_HOST']?>/login/logout.php" class="button special">로그아웃</a></li>
            <?php else: ?>
            <li><a href="http://<?=$_SERVER['HTTP_HOST']?>/login/login_main.php" class="button special">로그인</a></li>
            <?php endif ?>

          </ul>
        </div>
      </li>
    </ul>
  </nav>
</header>
