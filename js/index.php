<?php 
    define("BASE_URL", 'http://'.$_SERVER['HTTP_HOST'].'/');
    header('Location: '.BASE_URL.'pages/error403');
?>