<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "0"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "localhost";
    $DB_NAME = "prod";
    $DB_USER = "root";
    $DB_PASS = "";
}else{
    $DB_SERVER = "oakydesigns.dk.mysql";
    $DB_NAME = "oakydesigns_dkkragebjerggaard";
    $DB_USER = "oakydesigns_dkkragebjerggaard";
    $DB_PASS = "11223344";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);