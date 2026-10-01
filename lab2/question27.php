<!DOCTYPE html>
<html>
<body>

<h2>Upload CV</h2>

<form method="post" enctype="multipart/form-data">
    Select CV:
    <input type="file" name="cv" required><br><br>

    <input type="submit" name="upload" value="Upload">
</form>

<?php

if(isset($_POST["upload"])){

    $file=$_FILES["cv"];

    $name=$file["name"];
    $size=$file["size"];
    $tmp=$file["tmp_name"];

    $ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));

    $allowed=["pdf","doc","docx"];

    if(in_array($ext,$allowed) && $size<1048576){

        move_uploaded_file($tmp,"uploads/".$name);
        echo "CV Uploaded Successfully";

    }else{

        echo "Only PDF/DOC/DOCX and size less than 1 MB";
    }
}
?>

</body>
</html>