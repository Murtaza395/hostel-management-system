<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="users.css">
    <title>USERS</title>
</head>
<body>
    <form action="" method="post">
        <?php
include"connection.php";
$users="SELECT * from users ";
$result=mysqli_query($sql,$users);
if(mysqli_num_rows($result)> 0){

?>
        <table>
            <thead>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
            </thead>

            <tbody>
            <?php 
            while($value=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $value['firstname']?></td>
                <td><?php echo $value['lastname']?></td>
                <td><?php echo $value['email']?></td>
                <td><?php echo $value['password']?></td>
            </tr>
            <?php
            }
        ?>
            </tbody>

        </table>
        <?php
}
        ?>
    </form>
</body>
</html>