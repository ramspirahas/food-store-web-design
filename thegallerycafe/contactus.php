<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phonenum = $_POST['phonenum'];
$subject = $_POST['subject'];  // Correct variable name
$message = $_POST['message'];

if (!empty($name) && !empty($email) && !empty($phonenum) 
&& !empty($subject) && !empty($message))  // Correct variable name
{

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "restaurant";

    // Create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error){
        die('Connect Error ('. $conn->connect_errno .') '. $conn->connect_error);
    } else {
        $SELECT = "SELECT email FROM contactus WHERE email = ? LIMIT 1";
        $INSERT = "INSERT INTO contactus (name, email, phonenum, subject, message) values (?, ?, ?, ?, ?)";

        // Prepare statement
        $stmt = $conn->prepare($SELECT);
        if ($stmt === false) {
            die('Prepare error: ' . htmlspecialchars($conn->error));
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum == 0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            if ($stmt === false) {
                die('Prepare error: ' . htmlspecialchars($conn->error));
            }

            $stmt->bind_param("ssiss", $name, $email, $phonenum, $subject, $message);  // Correct variable names
            $stmt->execute();
            echo 
            '<script>
                alert("New record inserted successfully!");
                window.location.href = "index.html";
            </script>';
        } else {
            echo
            '<script>
                alert("Someone already registered with this email.");
                window.location.href = "index.html";
            </script>';
        }

        $stmt->close();
        $conn->close();
    }
} else {
    echo "All fields are required";
    die();
}
?>
