<?php
session_start();
include("conn.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) { // Check if username and password are set
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!empty($username) && !empty($password) && !is_numeric($username)) {
            $query = "SELECT * FROM signup WHERE username='$username' LIMIT 1";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] == $password) {
                    header("Location: index.html");
                    die;
                } else {
                    echo '<script>
                        alert("Wrong username or password");
                        window.location.href = "login.html";
                        </script>';
                }
            } else {
                echo '<script>
                    alert("Username does not exist");
                    window.location.href = "signup.html";
                    </script>';
            }
        } else {
            echo '<script>
                alert("Please enter valid username and password");
                window.location.href = "signup.html";
                </script>';
        }
    }
}
?>
