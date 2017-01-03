<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/PDO_preset.php';

$passwd_enc = hash ( "sha256" , $passwd );

$sql= "SELECT user_id, passwd FROM user_inform where user_id = '$id'";
$stmt = $pdo->query($sql);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($id==$row['user_id'])
{
    if( $passwd_enc==$row['passwd'] )
    {
        // 올바른 정보
        $_SESSION['is_logged'] = 'YES';
        $_SESSION['user_id'] = $id;
        echo("<script>location.replace('../list/list.php');</script>");
        exit();
    }
    else
    {
        // 암호가 틀렸음
        $_SESSION['is_logged'] = 'NO';
        $_SESSION['user_id'] = $id;
        echo("<script>location.replace('login_main.php');</script>");
        exit();
    }
}
else
{
   echo("<script>location.replace('login_main.php');</script>");
   exit();
}
?>
