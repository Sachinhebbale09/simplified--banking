<?php

$ServerName = 'localhost';
$UserName = 'root';
$Password = '';
$dbName = 'bank';  

$connect = mysqli_connect($ServerName, $UserName, $Password, $dbName);

if(!$connect)
{
    echo "Connection failed";
}

?>