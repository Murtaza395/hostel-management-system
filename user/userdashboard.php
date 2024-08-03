<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userdashboard.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="full-page">
            <div class="left-top">
                <h1 class="top-text">Welcome to user dashboard</h1>
            </div>
            <div class="right-top">
                <div class="right-top-a">
                <img src="icon.jpeg " alt="profile" width="30%" height="30px" class="icon">
                </div>
                <div class="right-top-b">
                <input type="submit" name="profile" value="profile" class="profile">
                </div>
            </div>
            <div class="left-header">
                <div class="left-header-a">
                    <input type="submit" name="bk-hostel" value="Book-Hostel" class="book-hostel"><br><br><br>
                    <input type="submit" name="Applications" value="Applications" class="Apps"><br><br><br>
                </div>
                <div class="left-header-b">
                <input type="submit" name="cmp" value="Complaints" class="cmp"><br><br><br>
                <input type="submit" name="reg-cmp" value="Registered-Complaints" class="reg-cmp"><br><br><br>
                </div>
                <div class="left-header-c">
                <input type="submit" name="feedback" value="Feedback" class="feedback"><br><br><br>
                <input type="submit" name="chg-pass" value="Change Password" class="change-pass">
                </div>
            </div>
            <div class="right-header">
                <img src="hostel.jpg" width="100%" height="100%">
            </div>
        </div>
    </form>
</body>
</html>
<?php
if(isset($_POST['bk-hostel'])){
    header("LOcation:http://localhost/hostel-management-system/user/book-hostel.php");
}
if(isset($_POST['Applications'])){
    header("LOcation:http://localhost/hostel-management-system/user/Applications.php");
}
if(isset($_POST['cmp'])){
    header("LOcation:http://localhost/hostel-management-system/user/complaints.php");
}
if(isset($_POST['reg-cmp'])){
    header("LOcation:http://localhost/hostel-management-system/user/registered-complaints.php");
}
if(isset($_POST['feedback'])){
    header("LOcation:http://localhost/hostel-management-system/user/feedback.php");
}
if(isset($_POST['chg-pass'])){
    header("LOcation:http://localhost/hostel-management-system/user/change-password.php");
}
?>