<?php
session_start();
if(!empty($_SESSION['message'])) {
   $message = $_SESSION['message'];
}


?>


<h1 style="text-align:center;"><?php echo $message;?></h1>