    <?php
    require_once(__DIR__ . "/../model/database.php");
//    chooses model folder and selects database.php
//    "../" takes you to the folder that your folder is stored in
    $connection = new mysqli($host, $username, $password);
//    sets $connection as a mysqli object ==> takes in host, username, and password for phpMyAdmin
    if($connection->connect_error) {
//        try to connect to server
        die('Error: ' . $connection->connect_error);
//        if there is and error, die and tell user what error is
    }
    
    $exists = $connection->select_db($database);
    
    if(!$exists) {
//        checking if we can connect to the database. if the datatbase doesn't exist -> we can create new one
        $query = $connection->query("CREATE DATABASE $database");
//        query sent -> create database with name stored in $database
        
        if($query) {
            echo "Succesfully created database " . $database;
//            if database is created (if query worked) tell me
        }
    }
    else {
        echo "Database already exists.";
//        if database exists already, tell me
    }
    
    $connection->close();
//    close the connection