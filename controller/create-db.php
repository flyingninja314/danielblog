    <?php
    require_once(__DIR__ . "/../model/database.php");
//    chooses model folder and selects database.php
//    "../" takes you to the folder that your folder is stored in
    $connection = new mysqli($host, $username, $password);
//    sets $connection as a mysqli object ==> takes in host, username, and password for phpMyAdmin
    if ($connection->connect_error){
//        try to connect to server
        die('Error: ' . $connection->connect_error);
//        if there is and error, die and tell user what error is
    }
    else {
        echo "Succes: " . $connection->host_info;
//        otherwise, say "Success: " and give host info
    }
    
    $connection->close();
//    close the connection