<?php
session_start();
include "db.php";

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";

    $result=mysqli_query($con,$sql);

    $list=mysqli_fetch_array($result);
    $fname=$list['fname'];
    $lname=$list['lname'];

    if ($list['email'] === $email) {
        header('location: dashboard.php');
        $_SESSION['message']="$fname $lname, Login Successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }


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
</head>
<body>
    <div class="container mt-5">
        <div class="offset-3 col-md-6">
            <h2 class="text-center">Login</h2>
            <form method="post" action="">

                <label for="email">Email Address:</label>
                <input class="form-control" type="email" name="email"><br>

                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password"><br>

                <input class="btn btn-md btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>