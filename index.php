<?php
include("connect.php");
if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $sql = "insert into `logindetails`(Username,Password) values('$username','$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        //echo "Data inserted successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="form">
        <h2>Login Form</h2>
        <form name="loginform" method="POST">
            <div class="username">Username</div>
            <input type="text" id="customerName" name="user" placeholder="username" autocomplete="off" required><br><br>
            <div class="password">Password</div>
            <input type="password" id="password" name="pass" placeholder="password" required><br><br>
            <button type="submit" name="submit">Submit</button>

                


</body>

</html>