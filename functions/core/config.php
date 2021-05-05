<?php 
    global $config; 
    
    $config = array(
        'base_url' => 'http://'.$_SERVER['HTTP_HOST'].'/',
        'db' => array(
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            // 'database' => 'thesisit2',
            'database' => 'tmsdup',
        )
    );
?>