<?php

require_once("DatabasePDO.php");

class Models
{
    function addMember($account)
    {
        $pdo = new DatabasePDO;
            $grammer = "INSERT INTO `Member`(`account`) VALUES (:account)";
            $paramArray = [':account' => $account];
            $result = $pdo->change($grammer, $paramArray);
        return $result;
    }

    function getBalance($account)
    {
        $pdo = new DatabasePDO;
            $grammer = "SELECT `balance` FROM `Member` WHERE `account` = :account";
            $paramArray = [':account' => $account];
            $result = $pdo->selectOnce($grammer, $paramArray);
        return $result;
    }

    function addDetail($account, $type, $money, $transid)
    {
        $pdo = new DatabasePDO;
            $grammer = "INSERT INTO `detail`(`type`, `money`, `account`, `transid`) VALUES (:type, :money, :account, :transid)";
            $paramArray = [
                ':account' => $account,
                ':type' => $type,
                ':money' => $money,
                ':transid' => $transid
            ];
            $result = $pdo->change($grammer, $paramArray);
        return $result;
    }

    function updateBalance($account, $type, $money)
    {
        $pdo = new DatabasePDO;
        if($type == "OUT"){
            $type = -($type);
        }
        $grammer = "UPDATE `Member` SET `balance` = `balance` + :money WHERE `account` = :account";
        $paramArray = [
            ':account' => $account,
            ':money' => $money
        ];
        $result = $pdo->change($grammer, $paramArray);
        return $result;
    }
    function checkDetail($account, $transid)
    {
        $pdo = new DatabasePDO;
            $grammer = "SELECT * FROM `detail` WHERE `account` = :account and `transid` = :transid";
            $paramArray = [
                ':account' => $account,
                ':transid' => $transid
            ];
            $result = $pdo->selectOnce($grammer, $paramArray);
        return $result;
    }
}