
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    if ($email) {
        file_put_contents("emails.txt", $email . PHP_EOL, FILE_APPEND);
        echo "Thanks for signing up!";
    } else {
        echo "Invalid email address.";
    }
}
?>
    