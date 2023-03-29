<?php

include("db.php");


if(isset($_POST)){
    if(isset($_POST['fname']) && !empty($_POST['fname']) && isset($_POST['lname']) && !empty($_POST['lname']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){
        $fname=trim($_POST['fname']);
        $lname=trim($_POST['lname']);
        $email=trim($_POST['email']);
        $password=trim($_POST['password']);
        $cPassword=trim($_POST['cPassword']);

        if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($cPassword)) {
            echo "Please, fill in the all fields.";
        } else {

        if($password !== $cPassword) {
            echo "Passwords does not match.";
        } else {

            $sql="INSERT INTO `users`(`fname`, `lname`, `email`, `password`) VALUES ('$fname','$lname','$email','$password')";

            if ($con->query($sql) === true) {
                echo "Registration successful! $fname $lname";
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
            $con->close();
        }
    }
    }else{
        echo "Mandatory Field!";
    }

}