
<?php
$email = $_POST['email'];
file_put_contents("emails.txt", $email . "\n", FILE_APPEND);
echo "Thank you for signing up!";
?>
