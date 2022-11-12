<?php
session_start();
include("connect.php");
if (isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        if($row['status'] == "pending"){
            echo "Please wait for the admin to accept your register request.";
        }else if(password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            // echo "<script type='text/javascript'>myAlertAdmin()</script>";
            // header("Location: ../index.php");
        }
        else {
            echo "Incorrect Username or Password";
            // header("Location: ../login.php?error");
        }
    } 
}

?>