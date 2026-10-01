<?php
$conn = new mysqli("localhost","root","","bca_lab");

if($conn->connect_error){
    die("Connection Failed");
}

// Create table automatically
$conn->query("CREATE TABLE IF NOT EXISTS employees(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    rank VARCHAR(50),
    status VARCHAR(20),
    image VARCHAR(255),
    created_by VARCHAR(50),
    updated_by VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)");

// Insert
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $rank = $_POST['rank'];
    $status = $_POST['status'];

    $image = "";
    if(!empty($_FILES['image']['name'])){
        $image = $_FILES['image']['name'];

        if(!is_dir("uploads")){
            mkdir("uploads");
        }

        move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$image);
    }

    $conn->query("INSERT INTO employees(name,rank,status,image,created_by,updated_by)
    VALUES('$name','$rank','$status','$image','admin','admin')");
}

// Delete
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM employees WHERE id=$id");
    header("Location: question30.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee CRUD</title>
    <style>
        body{font-family:Arial;}
        table{border-collapse:collapse;width:100%;}
        th,td{border:1px solid black;padding:8px;text-align:center;}
        th{background:#ddd;}
    </style>
</head>
<body>

<h2>Employee CRUD</h2>

<form method="post" enctype="multipart/form-data">
    Name:
    <input type="text" name="name" required><br><br>

    Rank:
    <input type="text" name="rank" required><br><br>

    Status:
    <select name="status">
        <option>Active</option>
        <option>Inactive</option>
    </select><br><br>

    Image:
    <input type="file" name="image"><br><br>

    <input type="submit" name="save" value="Save">
</form>

<hr>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Rank</th>
    <th>Status</th>
    <th>Image</th>
    <th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM employees");

while($row = $result->fetch_assoc()){
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['rank']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td>
        <?php
        if($row['image']!=""){
            echo "<img src='uploads/".$row['image']."' width='50'>";
        }
        ?>
    </td>
    <td>
        <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Delete?')">Delete</a>
    </td>
</tr>
<?php
}
?>

</table>

</body>
</html>