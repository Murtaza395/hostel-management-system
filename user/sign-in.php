<?php
include("connection.php");
if(isset($_POST['signin'])){
    $email=mysqli_real_escape_string($sql,$_POST['email']);
    $pass=mysqli_real_escape_string($sql,md5($_POST['pass']));
$sqli="SELECT email,password FROM users WHERE email='$email' AND password='$pass'";
$result = mysqli_query($sql,$sqli);
if(mysqli_num_rows($result)>0){
header("Location:http://localhost/hostel-management-system/user/userdashboard.php");
echo"Sign in Successfully";
}
else{
    echo"Not matched";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <title>Sign In</title>
    <!--<script>
        alert("Welcome");
    </script>-->

</head>
<body background="b.jpg">
    <form action="" method="post">
    <div class="full-page">
        <div class="login-page">
            <label>Email</label><br>
        <input type="email" name="email" class="b"><br><br>
        <label>Password</label><br>
        <input type="password" name="pass" class="b"><br><br>
        <input type="submit" name="signin" class="signin" value="signin"> 
        </div>
    </div>
    </form>
</body>
</html>
