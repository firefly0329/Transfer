<?php

require_once("Models.php");

$account = $_GET['account'];

$myModle = new Models;
$memer = $myModle->getMember($account);
if($memer['account'] == $account){
    echo "please change another account";
    exit();
}
$result = $myModle->addMember($account);

if ($result == true) {
    echo "addMember Success";
} else {
    echo "addMember error";
}