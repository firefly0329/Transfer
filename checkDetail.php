<?php

header("Content-Type:text/html; charset=utf-8");
require_once("Models.php");

$account = $_GET['account'];
$transid = $_GET['transid'];

$myModle = new Models;
$detail = $myModle->checkDetail($account, $transid);

if ($detail == false) {
    echo "no data";
    exit();
}

echo "轉出or轉入:" . $detail['type'] . "<br>";
echo "金額:" . $detail['money'] . "<br>";
echo "帳號:" . $detail['account'] . "<br>";
echo "轉帳編號:" . $detail['transid'] . "<br>";




