<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "0"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "localhost";
    $DB_NAME = "moseholm";
    $DB_USER = "root";
    $DB_PASS = "";
}else{
    $DB_SERVER = "loomedai.com.mysql";
    $DB_NAME = "loomedai_commoseholm";
    $DB_USER = "loomedai_commoseholm";
    $DB_PASS = "123456";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);