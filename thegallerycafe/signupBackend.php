<?php
    session_start();
    include("conn.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !empty($username) && !is_numeric($email)) {
            $query = "INSERT INTO signup (email, username, password) VALUES ('$email', '$username', '$password')";
            $result = mysqli_query($conn, $query);

            if($result) {
                // Redirect to login.html upon successful insertion
                echo "<script type='text/javascript'>alert('Registration Successful!!');</script>";
                echo "<script type='text/javascript'>window.location.href = 'login.html';</script>";
                exit();
            } else {
                // Handle insertion failure
                $error_message = "Failed to create account";
            }
        } else {
            // Handle empty or invalid fields
            $error_message = "Please fill all fields";
        }
    }

    if(isset($error_message)) {
        echo "<script type='text/javascript'>alert('$error_message');</script>";
    }
?>
