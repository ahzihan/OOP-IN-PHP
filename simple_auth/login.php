<?php
    session_start([
        'cookie_lifetime' => 600,
    ]);

    $error=false;
    
    if(isset($_POST['username']) && isset($_POST['password'])){

        if("admin"==$_POST['username'] && '827ccb0eea8a706c4c34a16891f84e7b'==md5($_POST['password'])){
            $_SESSION['user'] = true;
        }else{
            $error=true;
            $_SESSION['user'] = false;
        }
    }

    if (isset($_POST['logout'])) {
        $_SESSION['user'] = false;
        session_destroy();
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body class="mt-5">
    <div class="container offset-3 col-md-6">
        <div class="row">
            <div>
                <?php
                    if(isset($_SESSION['user']) && $_SESSION['user']==true){
                        echo "<h2 class='bg-info text-white p-3 text-center'>You are Successfully Login!</h2>";
                    }else{
                        echo "<h2 class='p-3 text-center'>Hello Stranger, Login Below!!</h2>";
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <?php
                if($error){
                    echo "<blockquote class='text-danger text-center'>Username and Password did not match.</blockquote>";
                }
                if($_SESSION['user'] == false){
            ?>
            <form class="mt-5" action="" method="POST">
                <h2 class="text-center">LOG IN</h2>
                <div class="mb-3">
                    <label class="form-label"><b>Username</b></label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <label class="form-label"><b>Password</b></label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-success">LOG IN</button>
            </form>
            <?php }else{ ?>
            <form class="mt-5" action="" method="POST">
                <input type="hidden" name="logout" value="1">
                <button type="submit" class="btn btn-danger">LOG OUT</button>
            </form>    
            <?php } ?>
        </div>
    </div>
</body>
</html>