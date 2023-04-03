<?php
$hostName="localhost";
$userName="root";
$password="";
$dbName="db_blog_site";

$conn=new Mysqli($hostName,$userName,$password,$dbName);

if($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
