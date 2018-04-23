<?php
    $username = 'nogomet';
    $password = 'B09gR0yCOe5YdEDN';
    $database = 'nogomet';
    $server = 'localhost';
    //povezava na podatkovno bazo
    $link = mysqli_connect($server, $username, $password, $database);
    //za pravilno delanje šumnikov
    mysqli_query($link,"SET NAMES 'utf8'");

    //soljenje gesla
    $salt = '93487gh59874ldsk439875';
?>
