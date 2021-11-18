<!-- Imtiaz Adar
CRUD
DISPLAY DATABASE -->

<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY</title>
    <style>
        body{
            margin: 30px;
        }
        .user-btn{
            background-color: #1665B3;
            color: white;
            height: 55px;
            width: 250px;
            border: 2px solid black;
            cursor: grab;
            font-size: 1.2rem;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bolder;
            border-radius: 8%;
            margin-left: 5px;
        }
        .user-btn:hover{
            background-color: #232AF5;
        }
        td{
            font-weight: 800;
            font-size: 1.3rem;
            font-family: Arial, Helvetica, sans-serif;
            padding: 20px 0;
            padding-left: 5px;
            color: #DE2929;
            width: 16.6%;
            text-align: center;
        }
        h1{
            font-weight: bolder;
            font-size: 2.5rem;
            font-family: Arial, Helvetica, sans-serif;
            color: #DE2929;
        }
        table{
            /* border-collapse: collapse; */
            width: 100%;
            border-color: black;
        }
        a{
            color: white;
            text-decoration: none;
        }
        #del{
            background-color: #DE2929;
            color: white;
            height: 55px;
            width: 150px;
            border: 2px solid black;
            cursor: grab;
            font-size: 1.1rem;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bolder;
            border-radius: 8%;
        }
        #up{
            background-color: #1A642E;
            color: white;
            height: 55px;
            width: 150px;
            border: 2px solid black;
            cursor: grab;
            font-size: 1.1rem;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bolder;
            border-radius: 8%;
        }
        #del:hover{
            background-color: #FF0606;
        }
        #up:hover{
            background-color: #2EAC47;
        }
    </style>
</head>
<body>
    <button class="user-btn"><a href="user.php"> ADD STUDENT </a></button>
    <table align="center" border=2px solid>
        <thead>
            <caption> <h1>STUDENT DATABASE</h1></caption>
            <tr>
                <td>NAME</td>
                <td>ID</td>
                <td>EMAIL</td>
                <td>PASSWORD</td>
                <td colspan="2">OPERATION</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM student_info";
            $result = mysqli_query($database, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $name = $row["NAME"];
                $id = $row["ID"];
                $email = $row["EMAIL"];
                $pass = $row["PASSWORD"];
                echo '<tr>
                    <td>'.$name.'</td>
                    <td>'.$id.'</td>
                    <td>'.$email.'</td>
                    <td>'.$pass.'</td>
                    <td><button id="up"><a href="update.php?updateid='.$id.'"> UPDATE </a></button></td>
                    <td><button id="del"><a href="delete.php?deleteid='.$id.'"> DELETE </a></button></td></tr>';
            }
        ?>
        </tbody>
    </table>
</body>
</html>
