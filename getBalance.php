<?php

require_once("Models.php");

$myModle = new Models;
$account = $_GET['account'];
$member = $myModle->getMember($account);

echo "您的餘額為：" . $member['balance'];
// var_dump($result);