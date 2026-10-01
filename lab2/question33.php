<?php
$message = "";

if(isset($_POST['send'])){
    $to = $_POST['email'];
    $subject = "Notification";
    $body = $_POST['msg'];
    $headers = "From: admin@example.com";

    if(mail($to,$subject,$body,$headers)){
        $message = "Email sent successfully.";
    }else{
        $message = "Email sending failed.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
</head>
<body>

<h2>Email Notification</h2>

<form method="post">
    Email:
    <input type="email" name="email" required><br><br>

    Message:<br>
    <textarea name="msg" rows="5" cols="40" required></textarea><br><br>

    <input type="submit" name="send" value="Send Email">
</form>

<h3><?php echo $message; ?></h3>

</body>
</html>