<!DOCTYPE html>
<html>
<body>

<h2>Upload Profile Image</h2>

<form method="post" enctype="multipart/form-data">
    Select Image:
    <input type="file" name="image" required><br><br>

    <input type="submit" name="upload" value="Upload">
</form>

<?php

if(isset($_POST["upload"])){

    $file=$_FILES["image"];

    $name=$file["name"];
    $size=$file["size"];
    $tmp=$file["tmp_name"];

    $ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));

    $allowed=["png","jpg","jpeg"];

    if(in_array($ext,$allowed) && $size<512000){

        move_uploaded_file($tmp,"images/".$name);

        echo "Image Uploaded Successfully";

    }else{
        echo "<p>Input File: $name</p>";
        echo "<p>File Size: $size</p>";
        echo "<p>File Extension: $ext</p>";

        echo "Only PNG/JPG/JPEG and size less than 500 KB";
    }
}
?>

</body>
</html>