<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book-hostel.css">
    <title>Hostel Booking Form</title>
</head>
<body>
    <div class="full-page">
        <img src="hostel-booking.jpg" width="100%" height="300px">
    <form action="" method="post">
        <h1 class="header-text">Hostel Booking Form</h1>
    <div class="hostel-booking">
        <label>First-name</label><br>
        <input type="text" class="f-name" name="f-name"><br><br>
        <label>Last-name</label><br>
        <input type="text" class="l-name" name="l-name"><br><br>
        <label>Room type</label><br>
        <select name="rtype" class="room-type">
          <option value="">Select type</option>
            <option value="single-Bed">Signle-Bed</option>
            <option value="double-bed">Double-Bed</option>
            <option value="ac">AC</option>
        </select><br><br>
        <label>Addition Services</label><br><br>
        <label>Breakfast</label>
        <input type="radio" name="add" class="breakfast" value="breakfast">
        <label>Lunch</label>
        <input type="radio" name="add" class="lunch" value="lunch">
        <label>Dinner</label>
        <input type="radio" name="add" class="dinner" value="dinner"><br><br>
        <input type="submit" name="booking" class="booking" value="Submit">

    </div>

    </form>
</div>
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['booking'])){
    $fname=mysqli_real_escape_string($sql,$_POST['f-name']);
    $lname=mysqli_real_escape_string($sql,$_POST['l-name']);
    $type=mysqli_real_escape_string($sql,$_POST['rtype']);
    $add=mysqli_real_escape_string($sql,$_POST['add']);

    $sql1="SELECT firstname FROM booking WHERE firstname='{$fname}'";
    $result1=mysqli_query($sql,$sql1);
    if(mysqli_num_rows($result1)>0){
        mysqli_connect_error();
        echo"user already exist";
    }else{
    $result="INSERT INTO booking (firstname,lastname,roomtype,services) VALUES ('{$fname}','{$lname}','{$type}','{$add}')"; 
   if(mysqli_query($sql,$result)){
   header("Location:http://localhost/hostel-management-system/user/userdashboard.php");
   }
}
}
else{
    return false;
}

?>