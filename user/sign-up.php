<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Sign-Up</title>
</head>
<body>
    <form  action="" method="post">
    <div class="f-page">
        <img src="a.jpg" width="100%" height="250px">
        <h1 class="signup-text">Welcome to registration page</h1>
    <div class="signup-page">
        <label>First-Name</label><br>
        <input type="text" name="fname" class="a"><br><br>
        <label>Last name</label> <br>
        <input type="text" name="lname" class="a"><br><br>
        <label>Email</label> <br>
        <input type="email" name="email" class="a"><br><br>
        <label>Password</label> <br>
        <input type="password" name="pass" class="a"><br><br>
        <input type="submit" name="signup" class="signup" vlaue="sign-up">

    </div>


    </div>
    </form>
</body>
</html>
<?php
include("Connection.php");
if(isset($_POST['signup'])){
    $fname=mysqli_real_escape_string($sql,$_POST['fname']);
    $lname=mysqli_real_escape_string($sql,$_POST['lname']);
    $email=mysqli_real_escape_string($sql,$_POST['email']);
    $password=mysqli_real_escape_string($sql,md5($_POST['pass']));

    $sql1="SELECT email FROM users WHERE email='{$email}'";
    $result1=mysqli_query($sql,$sql1);
    if(mysqli_num_rows($result1)>0){
        mysqli_connect_error();
        echo"user already exist";
    }else{
    $result="INSERT INTO users (firstname,lastname,email,password) VALUES ('{$fname}','{$lname}','{$email}','{$password}')"; 
   if(mysqli_query($sql,$result)){
   header("Location:http://localhost/hostel-management-system/user/sign-in.php");
   }
}
}
else{
    return false;
}
?>