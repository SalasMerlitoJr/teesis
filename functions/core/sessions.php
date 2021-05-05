<?php
    include_once __DIR__.'\route.php';

    // check if session exist
    function checkSession(){
        session_start();
        if(isset($_SESSION['user'])){        
            if($_SESSION['user']['is_login']){
                gotoDashboard($_SESSION['user']['usertype']);
            }
        }        
        return false;
    }

    // to check user type current session
    function userTypeSession($type){
        session_start();
        if(isset($_SESSION['user'])){        
            if($_SESSION['user']['is_login']){
                if($type == $_SESSION['user']['usertype']){
                    return true;
                }
            }
        }        
        return false;
    }

    // Expected ARRAY paramater index
    // array('is_login', user_id, 'username', 'usertype', 'email')
    // to set the session
    // $sessions should be in array format    
   function setUserSession($sessions = array()){
       if(is_array($sessions)){
            session_start();
            $_SESSION['user'] = $sessions;
            return true;
       }
       return false;
   }
   
   // to get the session value
   // $index should a string
   function getUserSession(){
       session_start();
       if(isset($_SESSION['user'])){
            return $_SESSION['user'];
       }
       return false;
   }

   // to end the session
   function endSession(){
       session_start();
       session_unset();
       session_destroy();
   }

   // to set flashData Alerts
   function setFlashData($flashData = array()){
        if(is_array($flashData)){
            session_start();
            $_SESSION['flash'] = $flashData;
            return true;
        }
        return false;
   }

   // to get flashData Alerts
   function getFlashData(){
        if(isset($_SESSION['flash'])){
            return $_SESSION['flash'];
        }
        return false;
    }


    ?>