<!-- Imtiaz Adar
CRUD
UPDATE FORM -->

<?php
    include 'connect.php';
    $id = $_GET['updateid'];
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "UPDATE `student_info` SET NAME='$name', ID=$id, EMAIL='$email', PASSWORD='$password' WHERE ID=$id";
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
    <title>UPDATE</title>
</head>
<body>
<style>
        body{
            margin-top: 70px;
            margin-left: 50px;
        }
        .nf{
            width: 500px;
            height: 50px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #DE2929;
            margin-top: 2px;
            font-size: 1.2rem;
            font-weight: 400;
            font-family: Arial, Helvetica, sans-serif;
            padding-left: 8px;
        }
        .pf{
            width: 500px;
            height: 50px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #DE2929;
            margin-top: 2px;
            font-size: 1.2rem;
            font-weight: 400;
            font-family: Arial, Helvetica, sans-serif;
            padding-left: 8px;
        }
        .sf{
            width: 200px;
            height: 70px;
            color: whitesmoke;
            background-color: #DE2929;
            border-top: none;
            border-left: none;
            border-right: none;
            border: 2px solid black;
            margin-top: 50px;
            margin-left: 148px;
            font-size: 1.3rem;
            font-weight: 600;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 5%;
            cursor: grab;
        }
        .sf:hover{
            background-color: white;
            color: #DE2929;
        }
        h1{
            font-size: 2.5rem;
            font-weight: bolder;
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 45px;
            color: #DE2929;
        }
    </style>
</head>
<body>
    <h1>INFORMATION UPDATE FORM</h1>
    <form method="post">
        <input class="nf" type="text" name="name" value="" placeholder="Enter Your New Name"> <br>
        <input class="nf" type="number" name="id" value="" placeholder="Enter Your New ID"> <br>
        <input class="nf" type="email" name="email" value="" placeholder="Enter Your New Email"> <br>
        <input class="pf" type="password" name="password" value="" placeholder="Enter Your New Password"> <br>
        <input class="sf" type="submit" name="submit" value="UPDATE"> <br>
    </form>
</body>
</html>