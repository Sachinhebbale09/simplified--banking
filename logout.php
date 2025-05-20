<?php
    require_once('./connect.php');
    session_destroy();
    header("location: ./Main/index.php");
?>
