<?php 

    include_once "../core/sessions.php";
    include_once "../core/route.php";
    
    endSession();
    redirect('login');
    ?>