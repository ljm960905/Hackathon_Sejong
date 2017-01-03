<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/config.php');

$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

extract($_POST);

if($user_id == null)
{
  Header("Location: signup.php");
  exit();
}

$q = "SELECT * FROM user_inform WHERE user_id='$user_id'";
$result = $mysqli->query($q);
$row_cnt = $result->num_rows;

$user_encpass = hash ( "sha256" , $user_pass );
$user_encpass2 = hash ( "sha256" , $user_pass2 );

if($user_encpass2 == $user_encpass)
  //비밀번호 같을경우
  if($row_cnt)
  {
    //동일아이디 있을 경우
    Header("Location: signup.php");
    exit();
  }
  else
  {
    //동일아이디 없을 경우
    $q = "INSERT INTO user_inform ( user_id, passwd, email, home) VALUES ( '$user_id', '$user_encpass', '$user_email','$home' );";
    $mysqli->query( $q);
    $mysqli->close();

    Header("Location: login_main.php");
    exit();
  }
else
{
  //비밀번호가 다를경우
  Header("Location: signup.php");
  exit();
}


?>
