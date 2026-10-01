<!DOCTYPE html>
<html>
<head><title>Login Form</title></head>
<body>

<h2>Login Form</h2>

<form method="post">
    Username:
    <input type="text" name="username" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $user=$_POST["username"];
    $pass=$_POST["password"];

    if($user=="admin" && $pass=="12345"){
        echo "<h3>Login Successful</h3>";
    }else{
        echo "<h3>Invalid Username or Password</h3>";
    }
}
?>

</body>
</html>