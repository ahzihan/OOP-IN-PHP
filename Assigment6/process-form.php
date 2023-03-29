<?php
session_start();

// Function to validate email address
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Check if the form has been submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate form inputs
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
        echo 'Please fill out all fields.';
    }
    elseif(!validate_email($_POST['email'])) {
        echo 'Invalid email format.';
    }
    else {
        // Save profile picture to server
        $target_dir = "uploads/";
        $target_file = $target_dir . date("YmdHis") . basename($_FILES["profile_pic"]["name"]);
        move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file);

        // Save user data to CSV file
        $data = array($_POST['name'], $_POST['email'], $target_file);
        $fp = fopen('users.csv', 'a');
        fputcsv($fp, $data);
        fclose($fp);

        // Set session and cookie
        $_SESSION['username'] = $_POST['name'];
        setcookie('username', $_POST['name'], time()+3600);

        echo 'Registration successful!';
    }
}
?>
