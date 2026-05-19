<?php
    $con=mysqli_connect("localhost","root","","form");
    if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $qry="INSERT INTO `basic_form`(`id`, `name`, `email`, `password`) VALUES (null,'$name','$email','$password')";
            mysqli_query($con,$qry);
            header("location:select.php");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id=""></td>
            </tr>
        </table>
    </form>
</body>
</html>