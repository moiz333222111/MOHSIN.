<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "muaarihmuhammad67@gmail.com";
    $subject = "New Form Submission";
    $email_body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "file:///C:/Users/munam/Desktop/pracice/index.html";
    
    // Send email
    mail($to, $subject, $email_body, $headers);
}
?>
