<?php

require_once("Models.php");

$account = $_GET['account'];
$transid = $_GET['transid'];

$myModle = new Models;
$detail = $myModle->checkDetail($account, $transid);

if ($detail == false) {
    echo "no data";
} else {
    var_dump($detail);
}
