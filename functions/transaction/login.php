<?php 

    include_once "../core/core.php";

    // assign submitted data to a variable
    $data = $_POST;  
    
    // get mysqli db instance
    $conn = connect();

    // validation process
    if(validateEmail($data['email']) && !empty($data['password'])){
        $data['email'] = sanitizeString($data['email']);
        $data['password'] = md5(sanitizeString($data['password']));

        $sql = "SELECT * FROM users_tbl WHERE email = ? AND userpassword = ?";

        $query = $conn->prepare($sql);
        $query->bind_param("ss", $data['email'], $data['password']);

        $query->execute();

        $result = $query->get_result();
        if($result->num_rows > 0){
            $userData = $result->fetch_assoc();
            $userSession = array(
                'user_id' => $userData['user_id'],
                'username' => $userData['username'],
                'usertype' => $userData['type'],
                'is_login' => 1,
                'email' => $userData['email']
            );

            setUserSession($userSession);
            gotoDashboard($userData['type']);
        }else{
            
            $flashData = array(
                "message" => "Invalid Credentials",
                "type" => "error"
            );
    
            setFlashData($flashData);
            redirect('login');
        }
    }else{
        $flashData = array(
            "message" => "Invalid Input",
            "type" => "error"
        );

        setFlashData($flashData);
        redirect('login');
    }

?>