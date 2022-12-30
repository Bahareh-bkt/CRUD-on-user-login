<?php
    $connect = mysqli_connect('localhost', 'root', '', 'demo');
    if(!$connect){
        die("Database Connection Faild");
    }
?>