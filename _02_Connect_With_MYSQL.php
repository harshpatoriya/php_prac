<?php
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "harsh1";

    $conn = mysqli_connect($server_name, $user_name, $password, $database);
    // echo "Connection Successull";

    //Create DATABASE
    // $db = mysqli_query($conn,"CREATE DATABASE harsh1");

    //Create Table in Database
    // $sql = "CREATE TABLE `trip1` (`id` INT(10) NOT NULL , `name` VARCHAR(50) NOT NULL , `age` INT(3) NOT NULL , `doj` DATETIME NOT NULL ) ";
    // $tbl = mysqli_query($conn,$sql);

    //Insert Record
    $sql = "INSERT INTO `trip1` (`id`, `name`, `age`, `doj`) VALUES ('2', 'KARAN', '19', '2024-08-24 12:20:23.000000');";
    $result = mysqli_query($conn, $sql);

  
?>