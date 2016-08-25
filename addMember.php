<?php

require_once("Models.php");

$myModle = new Models;
$account = $_GET['account'];
$result = $myModle->addMember($account);

if ($result == true) {
    echo "addMember Success";
} else {
    echo "addMember error";
}