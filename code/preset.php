<?php
@session_start();

$p = array();
$path['root'] = $_SERVER['DOCUMENT_ROOT'].'/';

require_once ($path['root'].'config.php');

$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

extract($_POST);
extract($_GET);

?>
