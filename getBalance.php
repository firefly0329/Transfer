<?php

require_once("Models.php");

$myModle = new Models;
$account = $_GET['account'];
$result = $myModle->getBalance($account);

echo "您的餘額為：" . $result['balance'];
// var_dump($result);