<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
</head>
<body>

<h2>Registration Form</h2>

<?php

$name = $address = $username = $email = $password = "";
$website = $phone = $gender = $course = "";

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $name = trim($_POST["name"]);
    $address = trim($_POST["address"]);
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $website = trim($_POST["website"]);
    $phone = trim($_POST["phone"]);
    $gender = $_POST["gender"] ?? "";
    $course = $_POST["course"] ?? "";

    // Name validation
    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $errors[] = "Name must contain only letters and spaces.";
    }

    // Address validation
    if (empty($address)) {
        $errors[] = "Address is required.";
    }

    // Username validation
    if (empty($username)) {
        $errors[] = "Username is required.";
    } elseif (!preg_match("/^[a-zA-Z0-9_]+$/", $username)) {
        $errors[] = "Username can contain only letters, numbers and underscores.";
    }

    // Email validation
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Password validation
    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (
        strlen($password) < 8 ||
        !preg_match("/[A-Z]/", $password) ||
        !preg_match("/[a-z]/", $password) ||
        !preg_match("/[0-9]/", $password) ||
        !preg_match("/[^a-zA-Z0-9]/", $password)
    ) {
        $errors[] = "Password must be at least 8 characters and contain uppercase, lowercase, digit and special character.";
    }

    // Website validation
    if (empty($website)) {
        $errors[] = "Website is required.";
    } elseif (!filter_var($website, FILTER_VALIDATE_URL)) {
        $errors[] = "Invalid website URL.";
    }

    // Phone validation
    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    } elseif (!preg_match("/^(96|97|98)[0-9]{8}$/", $phone)) {
        $errors[] = "Phone must contain 10 digits and start with 96, 97 or 98.";
    }

    // Gender validation
    if (empty($gender)) {
        $errors[] = "Please select your gender.";
    }

    // Course validation
    $valid_courses = ["BCA", "BBM", "BBS", "BSW"];

    if (empty($course)) {
        $errors[] = "Please select a course.";
    } elseif (!in_array($course, $valid_courses)) {
        $errors[] = "Invalid course selected.";
    }

    // Display result
    if (empty($errors)) {
        echo "<h3>Form submitted successfully!</h3>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Address: " . htmlspecialchars($address) . "<br>";
        echo "Username: " . htmlspecialchars($username) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Website: " . htmlspecialchars($website) . "<br>";
        echo "Phone: " . htmlspecialchars($phone) . "<br>";
        echo "Gender: " . htmlspecialchars($gender) . "<br>";
        echo "Course: " . htmlspecialchars($course) . "<br>";
    } else {
        echo "<h3>Errors:</h3>";

        foreach ($errors as $error) {
            echo "<p>" . htmlspecialchars($error) . "</p>";
        }
    }
}

?>

<form method="post" action="">

    Name:
    <input type="text" name="name"
           value="<?php echo htmlspecialchars($name); ?>">
    <br><br>

    Address:
    <input type="text" name="address"
           value="<?php echo htmlspecialchars($address); ?>">
    <br><br>

    Username:
    <input type="text" name="username"
           value="<?php echo htmlspecialchars($username); ?>">
    <br><br>

    Email:
    <input type="email" name="email"
           value="<?php echo htmlspecialchars($email); ?>">
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>

    Website:
    <input type="text" name="website"
           value="<?php echo htmlspecialchars($website); ?>">
    <br><br>

    Phone:
    <input type="text" name="phone"
           value="<?php echo htmlspecialchars($phone); ?>">
    <br><br>

    Gender:
    <input type="radio" name="gender" value="Male"
        <?php if ($gender == "Male") echo "checked"; ?>> Male

    <input type="radio" name="gender" value="Female"
        <?php if ($gender == "Female") echo "checked"; ?>> Female

    <input type="radio" name="gender" value="Other"
        <?php if ($gender == "Other") echo "checked"; ?>> Other

    <br><br>

    Course:
    <select name="course">
        <option value="">-- Select Course --</option>
        <option value="BCA" <?php if ($course == "BCA") echo "selected"; ?>>BCA</option>
        <option value="BBM" <?php if ($course == "BBM") echo "selected"; ?>>BBM</option>
        <option value="BBS" <?php if ($course == "BBS") echo "selected"; ?>>BBS</option>
        <option value="BSW" <?php if ($course == "BSW") echo "selected"; ?>>BSW</option>
    </select>

    <br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>

