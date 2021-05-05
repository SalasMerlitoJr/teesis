<?php 
    // To remove XSS and SQL Injection strings
    function sanitizeString($input){
        if(!empty($input)){
            $strippedStr = strip_tags($input);
            return filter_var($strippedStr, FILTER_SANITIZE_STRING);
        }
    }

    // To validate email
    function validateEmail($email){
        if(!empty($email)){
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }
    }
?>