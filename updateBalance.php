<?php

require_once("Models.php");

$myModle = new Models;

$account = $_GET['account'];
$type = $_GET['type'];
$money = $_GET['money'];
$transid = $_GET['transid'];

$result1 = $myModle->addDetail($account, $type, $money, $transid);
$result2 = $myModle->updateBalance($account, $type, $money);

// var_dump($result1);
// var_dump($result2);
if ($result1 == true && $result2 == true) {
    echo "updateBalance Success";
} else {
    echo "updateBalance error";
}