<?php
session_start();

if(isset($_POST["login"])){

    $user=$_POST["username"];
    $pass=$_POST["password"];

    if($user=="admin" && $pass=="12345"){

        $_SESSION["username"]=$user;
        setcookie("username",$user,time()+3600);

        echo "Login Successful<br><br>";
    }else{
        echo "Invalid Login";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Session & Cookie Login</h2>

<form method="post">
Username:
<input type="text" name="username" required><br><br>

Password:
<input type="password" name="password" required><br><br>

<input type="submit" name="login" value="Login">
</form>

<?php

if(isset($_SESSION["username"])){
    echo "<br>Session User: ".$_SESSION["username"];
}

if(isset($_COOKIE["username"])){
    echo "<br>Cookie User: ".$_COOKIE["username"];
}
?>

</body>
</html>