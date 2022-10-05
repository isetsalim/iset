<?php 
include('layout/conn.php');
$id = $_GET['id'];
$delete = "DELETE FROM students where id=$id";
$result = mysqli_query($conn,$delete);
if($result){ 
    echo "Data Deleted";
}else{ 
    echo "Not Deleted";
}

?>