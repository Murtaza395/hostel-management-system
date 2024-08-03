<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front-page.css">
    <title>Document</title>
</head>
<body>
    <div class="f-page">
        <form action="" method="post">
        <div class="main-header">
            <div class="left-header">
               <input type="submit" value="Home" name="home" class="s-btn">
               <input type="submit" value="Contact" name="Contact" class="s-btn">
               <input type="submit" value="About" name="About" class="s-btn">
            </div>
            <div class="middle-header">
            <h1 class="header-text">WELCOME TO HOSTEL MANAGEMENT SYSTEM</h1>
            </div>
            <div class="right-header">
                <input type="submit" class="sign-in" name="sign-in" value="sign-in">
                <input type="submit" class="sign-up" name="sign-up" value="sign-up">
                
            </div>

        </div>
        <div class="middle">
            <img src="a.jpg" alt="hostel" width="100%" height="100%">
            <img src="b.jpg" alt="hostel" width="100%" height="100%">
            <img src="c.jpg" alt="hostel" width="100%" height="100%">
        </div>
        <div class="footer">
        <h1 class="footer-text"> Murtaza Mughal</h1>
        </div>
        </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['sign-in'])){
    header("Location:http://localhost/hostel-management-system/user/sign-in.php");
}
if(isset($_POST['sign-up'])){
    header("Location:http://localhost/hostel-management-system/user/sign-up.php");
}

?>