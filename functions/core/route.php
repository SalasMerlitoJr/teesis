<?php 
    include_once __DIR__.'\config.php';

    // parameter should be string
    function redirect($location = null){
        global $config;
        if(gettype($location) == "string" && isset($location)){
            header('Location: '.$config['base_url'].$location);
        }
    }

    // parameter should be string
    function gotoDashboard($type = null){
        if(gettype($type) == "string" && isset($type)){
            switch($type){
                case 'admin':
                    redirect('dashboard/admin');
                    break;
                case 'faculty':
                    redirect('dashboard/faculty');
                    break;
                case 'student':
                    redirect('dashboard/student');
                    break;
                case 'chairman':
                    redirect('dashboard/chairman');
                    break;
                default:
                    redirect('login');
                    break;
            }
        }
    }
    ?>
