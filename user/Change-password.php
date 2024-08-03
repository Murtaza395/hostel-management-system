<html>
<head>
    <link rel="stylesheet" href="changepassword.css">
<title>Change Password</title>
</head>
<body>
<div class="full-page">
    <form action="" method="post">
        <h1 class="top">Change Your Password</h1>
       <div class="c-pass">
        <label>Current Password</label><br>
        <input type="password" name="pass" class="pass"><br><br>
        <label>New Password</label><br>
        <input type="password" name="npass" class="pass"><br><br>
        <label>Confirm Password</label><br>
        <input type="password" name="ncpass" class="pass"><br><br>
        <input type="submit" name="save" class="save" value="save">
       </div> 
    </form>

</div>
</body>
</html>
<?php
include'connection.php';
if(isset($_POST['save'])){
    $pass=$_POST['pass'];
    $npass=$_POST['npass'];
    $ncpass=$_POST['ncpass'];
    $sql1="SELECT password FROM users Where password=$pass";
   $result1=mysqli_query($sql,$sql1);
   print_r($result1);
    }



?>