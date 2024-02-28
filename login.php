<?php
echo "<pre>";
require_once "./User.php";
require_once "/DBC.php";

if(empty($_POST["username"]) || empty($_POST["password"])){
    echo "nejake udaje mate prazdne";
    exit();
}

$connection = DBC::getConnection();
var_dump($connection);
