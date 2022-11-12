<?php
session_start();
include("connect.php");
if (isset($_POST['btn_register'])) {
    $username = $_POST['regname'];
    $email = $_POST['regemail'];
    $password = $_POST['regpass'];
    $hashpass = password_hash($password, PASSWORD_DEFAULT);

    $query1 = "SELECT * FROM users WHERE username = '$username'";
    $result1 = mysqli_query($connection, $query1);
    if (mysqli_num_rows($result1) == 1) {
        echo "Username Already Exist.";
    }else{
        $query = "INSERT INTO users (username, email, password)
        values('$username','$email','$hashpass')";
        if (mysqli_query($connection, $query)) {
                echo "success";
        } else {
            echo "There is a problem on registering your account.";
        }
    }


}

?>