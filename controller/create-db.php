<?php
    require_once("../model/database.php");
//    chooses model folder and selects database.php
//    "../" takes you to the folder that your folder is stored in
    $connection = new mysqli($host, $username, $password);
//    sets $connection as a mysqli object ==> takes in host, username, and password for phpMyAdmin  