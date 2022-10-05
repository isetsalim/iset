<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
</head>
<body>
    <table border=1> 
        <tr> 
            <th>Name</th>
            <th>Class</th>
            <th>Dept</th>
            <th>Action</th>
        </tr>
        
            <?php 
            include('layout/conn.php');
            $select= "SELECT * FROM students";
            $result = mysqli_query($conn,$select);
            $row = mysqli_fetch_array($result);
            while($row = mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['class']?></td>
                <td><?php echo $row['dept']?></td>
                <td> 
                    <a href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
                    <a href="update.php?id=<?php echo $row['id'];?>">Update</a>
                </td>
            </tr>
            <?php 
            }
            ?>
        
    </table>
</body>
</html>