<?php

require_once("Models.php");

$account = $_GET['account'];
$transid = $_GET['transid'];

$myModle = new Models;
$result = $myModle->checkDetail($account, $transid);

var_dump($result);