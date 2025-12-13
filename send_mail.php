<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));

    $to = "kathirvel41099@gmail.com";
    $subject = "New User Details";

    $message = "
    Name: $name
    Phone Number: $phone
    ";

    $headers  = "From: noreply@getryt.io\r\n";
    $headers .= "Reply-To: kathirvelsiva3@gmail.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<h3>Email sent successfully!</h3>";
    } else {
        echo "<h3>Failed to send email.</h3>";
    }
}
?>
