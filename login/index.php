<?php  
    include '../functions/core/sessions.php'; 
    define('BASE_URL', $config['base_url']);
    checkSession();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThesisIT | Login</title>

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href='<?php echo BASE_URL; ?>css/bootstrap/bootstrap.min.css'>
    <link rel="stylesheet" href='<?php echo BASE_URL; ?>css/fontawesome/all.min.css'>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/login/login.css">

</head>

<body>
    <div class="container">
        <div class="row pt-4 mt-4">
            <div class="col-md-6 d-xs-none">
                <div class="col-md-12 text-center text-white">
                    <img width="290" height="290" class="ml-5 pl-5 pt-5" src="<?php echo BASE_URL; ?>images/ustp.png"
                        alt="">
                    <h2 class="ml-5 pl-5">University of Science and Technology of Southern Philippines</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-sm-12 pl-0 pr-0 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <b>ThesisIT</b>:
                                <span>Thesis Management System</span>
                            </h5>
                            <?php                                      
                                $alert = getFlashData();
                                if(isset($alert)){
                                    if($alert['type'] == "error"){
                            ?>
                                    <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Notice!</strong> <?php echo $alert['message']; ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            <?php    
                                        unset($_SESSION['flash']);
                                    }    
                                }
                            ?>
                            <form class="form-signin" method="POST"
                                action="<?php echo BASE_URL; ?>functions/transaction/login.php">
                                <div class="form-label-group">
                                    <input name="email" type="email" id="inputEmail" class="form-control"
                                        placeholder="Email address" required autofocus>
                                    <label for="inputEmail">Email address</label>
                                </div>

                                <div class="form-label-group">
                                    <input name="password" type="password" id="inputPassword" class="form-control"
                                        placeholder="Password" required>
                                    <label for="inputPassword">Password</label>
                                </div>

                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign
                                    in</button>
                                <div class="pt-4 text-center">
                                    Powered by: <a href="http://">AGBALUSA INC.</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src='<?php echo BASE_URL; ?>js/jquery.min.js'></script>
<script src='<?php echo BASE_URL; ?>js/bootstrap.bundle.min.js'></script>

</html>