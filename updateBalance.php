<?php

require_once("Models.php");

$myModle = new Models;

$account = $_GET['account'];
$type = $_GET['type'];
$money = $_GET['money'];
$transid = $_GET['transid'];

$member = $myModle->getMember($account);
//==========判斷是否輸入IN OUT=========
if($type == "IN" or $type == "OUT"){

}else{
    echo "enter IN or OUT please";
    exit;
}
//==========判斷金額是否為正===========
if($money <= 0){
    echo "money must be positive";
    exit();
}
//==========判斷帳號是否存在===========
if ($member == false) {
    echo "This account does not exist";
    exit();
}
//==========判斷餘額是否足夠===========
if ($type == "OUT" && $money > $member['balance']) {
    echo "There is not enough balance";
    exit();
}
//==========判斷轉帳序號是否重複=======
$datail = $myModle->getDetail($account, $transid);
// var_dump($datail);
if($datail != false){
    echo "transfer repeat";
    exit();
}

$result1 = $myModle->addDetail($account, $type, $money, $transid);
$result2 = $myModle->updateBalance($account, $type, $money);

// var_dump($result1);
// var_dump($result2);
if ($result1 == true && $result2 == true) {
    echo "updateBalance Success";
} else {
    echo "updateBalance error";
}