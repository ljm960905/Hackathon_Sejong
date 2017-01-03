<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';

$_SESSION['is_logged'] = 'NO';
$_SESSION['user_id'] = '';
$_SESSION['member_idx'] = '';

session_unset($_SESSION['user_id']);
session_unset($_SESSION['member_idx']);

header('Location: '.$url['root'].'../index.php');
exit();

?>
