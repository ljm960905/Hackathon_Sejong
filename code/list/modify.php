<?php
@session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/config.php');

$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

extract($_POST);
extract($_GET);

$is_logged = $_SESSION['is_logged'];

  if($is_logged=='YES')
  {
    $user_id = $_SESSION['user_id'];
  }
  else
  {
    echo("<script>location.replace('user_inform_change.php');</script>");
  }

$passwd_enc = hash ( "sha256" , $user_pass );
$passwd2_enc = hash ( "sha256" , $user_pass2 );
$org_pass_enc = hash ( "sha256" , $org_pass );

$q = "SELECT * FROM user_inform WHERE user_id='$user_id'";
$result = $mysqli->query($q);
$row = $result->fetch_array();

if($_SESSION['user_id']==$row['user_id'])
{
    if( $org_pass_enc==$row['passwd'] )
    {
        if($passwd_enc==$passwd2_enc)
        {
          // 올바른 정보
          $q1 = "UPDATE user_inform SET passwd='$passwd_enc', home='$home', email='$email' WHERE id='$user_id'";
          $result1 = $mysqli->query($q1);

          echo("<script>location.replace('../list/list.php');</script>");
          exit();
        }
        else
        {
          //바꿀 암호가 같지않음
          echo("<script>location.replace('user_inform_change.php');</script>");
          exit();
        }
    }
    else
    {
        // 암호가 틀렸음

        echo("<script>location.replace('user_inform_change.php');</script>");
        exit();
    }
}
else
{
   echo("<script>location.replace('user_inform_change.php');</script>");
   exit();
}
?>
