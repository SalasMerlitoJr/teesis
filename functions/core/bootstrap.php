<?php   
    require_once __DIR__.'\core.php';

    function start_boot(){
        $sessionData = getUserSession();
        if(isset($sessionData) && count($sessionData) > 0){
            if($sessionData['is_login']){              
                gotoDashboard($sessionData['usertype']);
            }
        }
        redirect('login');
    } 

    start_boot();

?>
