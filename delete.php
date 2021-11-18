<!-- Imtiaz Adar
CRUD
DELETE DATA -->

<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];
        $sql = "DELETE FROM student_info WHERE ID=$id";
        if(mysqli_query($database, $sql)){
            header('location: display.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE</title>
</head>
<body>
    
</body>
</html>