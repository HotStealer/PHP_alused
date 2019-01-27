<?php
require_once '../db/conf.php';
require_once '../db/db_fnk.php';
$username = $_GET['uname'];
$password = $_GET['upass'];

$ikt = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);
$sql = 'SELECT * FROM user WHERE username="'.$username.'"AND password="'.md5($password).'"';
$users = getData($sql, $ikt);
echo $users[0]['first_name'].' '.$users[0]['last_name'];