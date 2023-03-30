<?php
include "connection.php";
$message = '';
$ID = $_GET['id'];

$sql = "DELETE FROM students WHERE id='$ID'";

if ($conn->query($sql) === true) {
    header('location: viewStudent.php');
    $_SESSION['message'] = "Deleted Successfully!";
} else {
    $_SESSION['message'] = "Error: " . $sql . "<br>" . $conn->error;
}

