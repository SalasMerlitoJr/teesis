<?php 
    include_once __DIR__.'\config.php';

    // returns object
    function connect(){
        global $config;
        $db = $config['db'];

        $conn = mysqli_connect($db['host'], $db['username'], $db['password'], $db['database']); 
        
        if($conn->connect_error){
            return false;
        }

        return $conn;
    }
?>