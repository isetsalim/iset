
<?php 
include('layout/conn.php');
$id = $_GET['id'];
$select = "SELECT * FROM students WHERE id= $id";
$result = mysqli_query($conn,$select);
$row = mysqli_fetch_array($result);

if(isset($_POST['submit'])){ 
    $name = $_POST['name'];
    $class = $_POST['class'];
    $dept = $_POST['dept'];
$update = "UPDATE students SET name = '$name', class ='$class', dept='$dept' WHERE id = $id";
$result = mysqli_query($conn,$update);

if($result){ 
    echo "Data Updated";
}else{ 
    echo "Not Updated";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Page</title>
</head>
<body>
<form action="" method="POST"> 
    <label>Name</label><br>
    <input type="text" value="<?php echo $row['name'];?>" name="name"><br>
    <label>Class</label><br>
    <input type="text" value="<?php echo $row['class'];?>" name="class"><br>
    <label>Dept</label><br>
    <input type="text" value="<?php echo $row['dept'];?>" name="dept"><br>
    <input type="submit" value="Submit" name="submit"><br>
   </form>
</body>
</html>