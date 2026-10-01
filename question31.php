<?php
$conn = new mysqli("localhost","root","","bca_lab");
if($conn->connect_error) die("Connection Failed");

// Create tables
$conn->query("CREATE TABLE IF NOT EXISTS courses(
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(100),
duration VARCHAR(50),
status VARCHAR(20),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)");

$conn->query("CREATE TABLE IF NOT EXISTS students(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
course_id INT,
fee DECIMAL(10,2),
rollno VARCHAR(20),
phone VARCHAR(20),
address TEXT,
dob DATE,
status VARCHAR(20),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
FOREIGN KEY(course_id) REFERENCES courses(id)
)");

// Save course
if(isset($_POST['course'])){
    $conn->query("INSERT INTO courses(title,duration,status)
    VALUES('{$_POST['title']}','{$_POST['duration']}','{$_POST['cstatus']}')");
}

// Save student
if(isset($_POST['student'])){
    $conn->query("INSERT INTO students(name,course_id,fee,rollno,phone,address,dob,status)
    VALUES(
    '{$_POST['name']}',
    '{$_POST['course_id']}',
    '{$_POST['fee']}',
    '{$_POST['rollno']}',
    '{$_POST['phone']}',
    '{$_POST['address']}',
    '{$_POST['dob']}',
    '{$_POST['status']}')");
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Add Course</h2>
<form method="post">
Title: <input type="text" name="title" required>
Duration: <input type="text" name="duration" required>
<select name="cstatus">
<option>Active</option>
<option>Inactive</option>
</select>
<input type="submit" name="course" value="Save Course">
</form>

<hr>

<h2>Add Student</h2>
<form method="post">

Name: <input type="text" name="name" required><br><br>

Course:
<select name="course_id">
<?php
$c=$conn->query("SELECT * FROM courses");
while($row=$c->fetch_assoc()){
echo "<option value='{$row['id']}'>{$row['title']}</option>";
}
?>
</select><br><br>

Fee: <input type="number" name="fee"><br><br>
Roll: <input type="text" name="rollno"><br><br>
Phone: <input type="text" name="phone"><br><br>
Address: <input type="text" name="address"><br><br>
DOB: <input type="date" name="dob"><br><br>

<select name="status">
<option>Active</option>
<option>Inactive</option>
</select><br><br>

<input type="submit" name="student" value="Save Student">

</form>

<hr>

<h2>Student List</h2>

<table border="1" cellpadding="8">
<tr>
<th>ID</th><th>Name</th><th>Course</th><th>Fee</th><th>Roll</th><th>Phone</th>
</tr>

<?php
$sql="SELECT students.*,courses.title
FROM students JOIN courses
ON students.course_id=courses.id";

$r=$conn->query($sql);

while($d=$r->fetch_assoc()){
?>
<tr>
<td><?= $d['id'] ?></td>
<td><?= $d['name'] ?></td>
<td><?= $d['title'] ?></td>
<td><?= $d['fee'] ?></td>
<td><?= $d['rollno'] ?></td>
<td><?= $d['phone'] ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>