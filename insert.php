<?php 
include('layout/conn.php');
if(isset($_POST['submit'])){ 
$name = $_POST['name'];
$class = $_POST['class'];
$dept = $_POST['dept'];

$insert = "INSERT INTO students(name,class,dept) VALUES ('$name','$class','$dept')";
$result = mysqli_query($conn,$insert); 
if($result){ 
    echo "Inserted";
}else{ 
    echo "Not Inserted";
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Insert Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form action="" method="POST"> 
    <label>Name</label><br>
    <input type="text" value="" name="name"><br>
    <label>Class</label><br>
    <input type="text" value="" name="class"><br>
    <label>Dept</label><br>
    <input type="text" value="" name="dept"><br>
    <input type="submit" value="Submit" name="submit"><br>
   </form> 
</body>
</html>