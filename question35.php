<?php
$file = "student.txt";

// Create & Write
if(isset($_POST['write'])){
    $text = $_POST['text'];
    file_put_contents($file,$text);
}

// Append
if(isset($_POST['append'])){
    $text = $_POST['text'];
    file_put_contents($file,$text.PHP_EOL,FILE_APPEND);
}

// Delete
if(isset($_POST['delete'])){
    if(file_exists($file)){
        unlink($file);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Handling</title>
</head>
<body>

<h2>File Handling Demo</h2>

<form method="post">

<textarea name="text" rows="5" cols="40"></textarea><br><br>

<input type="submit" name="write" value="Write File">

<input type="submit" name="append" value="Append File">

<input type="submit" name="delete" value="Delete File">

</form>

<hr>

<h3>File Content</h3>

<?php
if(file_exists($file)){
    echo "<pre>";
    echo htmlspecialchars(file_get_contents($file));
    echo "</pre>";
}else{
    echo "File does not exist.";
}
?>

</body>
</html>