    <?php
    require_once(__DIR__ . "/../model/database.php");
//    chooses model folder and selects database.php
//    "../" takes you to the folder that your folder is stored in
    $connection = new mysqli($host, $username, $password);
//    sets $connection as a mysqli object ==> takes in host, username, and password for phpMyAdmin
    if($connection->connect_error) {
//        try to connect to server
        die('<p>Error: ' . $connection->connect_error . ".</p> <br>");
//        if there is and error, die and tell user what error is
    }
    
    $exists = $connection->select_db($database);
    
    if(!$exists) {
//        checking if we can connect to the database. if the datatbase doesn't exist -> we can create new one
        $query = $connection->query("CREATE DATABASE $database");
//        query sent -> create database with name stored in $database
        
        if($query) {
            echo "<p>Succesfully created database " . $database . ".</p> <br>";
//            if database is created (if query worked) tell me
        }
    }
    else {
        echo "<p>Database already exists.</p> <br>";
//        if database exists already, tell me
    }
    
    $query = $connection->query("CREATE TABLE posts ("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "title varchar(255) NOT NULL,"
            . "post text NOT NULL,"
            . "PRIMARY KEY (id))");
//    re-use $query 
//    id -> integer, auto increment, can hold 11 spaces (up to 99999999999 posts), can't be empty
//    title -> 255 characters allowed, not null
//    post -> chunk of text, not null
//    primary key -> makes id primary key
    
    if($query) {
        echo "<p>Succesfully created table: posts</p>";
//        if query works, tell me
    }
    else {
        echo "$connection->error";
//        if not, tell me why not
    }
    
    $connection->close();
//    close the connection