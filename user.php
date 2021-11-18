<!-- Imtiaz Adar
CRUD
USER REGISTRATION -->

<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $student_name = $_POST['name'];
        $student_id = $_POST['id'];
        $student_email = $_POST['email'];
        $student_password = $_POST['password'];
        $sql = "INSERT INTO student_info(NAME, ID, EMAIL, PASSWORD) VALUES ('$student_name', $student_id, '$student_email', '$student_password')";
        if(mysqli_query($database, $sql))
        {
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
    <title>REGISTRATION</title>
    <style>
        body{
            margin-top: 70px;
            margin-left: 510px;
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
            margin-left: -50px;
            color: #DE2929;
        }
    </style>
</head>
<body>
    <h1>STUDENT REGISTRATION FORM</h1>
    <form method="post">
        <input class="nf" type="text" name="name" value="" placeholder="Enter Your Name"> <br>
        <input class="nf" type="number" name="id" value="" placeholder="Enter Your ID"> <br>
        <input class="nf" type="email" name="email" value="" placeholder="Enter Your Email"> <br>
        <input class="pf" type="password" name="password" value="" placeholder="Enter Your Password"> <br>
        <input class="sf" type="submit" name="submit" value="SUBMIT"> <br>
    </form>
</body>
</html>