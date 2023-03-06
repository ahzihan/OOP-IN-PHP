<?php

$plainText = "abcdefghijklmnopqrstuvwxyz1234567890";
$key = "o1yvhdm5agzs4qi3n7c2u68tkwx0jflebpr9";

$message = $_POST['decryptText'];


$output = "";

for ($i = 0; $i < strlen($message); $i++) {
    $letter = $message[$i];
    $position = strpos($key, $letter);

    if ($position !== false) {
        $replacement = $plainText[$position];
    } else {
        $replacement = $letter;

    }
    $output = $output . $replacement;
}
echo $output;
