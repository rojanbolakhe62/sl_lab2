<!DOCTYPE html>
<html>
<body>

<h2>User Registration</h2>

<form method="post">

Username:
<input type="text" name="username" required><br><br>

Email:
<input type="email" name="email" required><br><br>

Date of Birth:
<input type="date" name="dob" required><br><br>

<input type="submit" value="Register">

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $user=$_POST["username"];
    $email=$_POST["email"];
    $dob=$_POST["dob"];

    if(strlen($user)<8){
        echo "Username must be at least 8 characters.";
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Invalid Email Address.";
    }
    elseif(empty($dob)){
        echo "Invalid Date of Birth.";
    }
    else{

        echo "<h3>Registration Successful</h3>";

        echo "Username: $user <br>";
        echo "Email: $email <br>";
        echo "Date of Birth: $dob";
    }
}
?>

</body>
</html>