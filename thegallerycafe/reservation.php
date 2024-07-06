<?php

$name = $_POST['name'];
$email  = $_POST['email'];
$phonenum = $_POST['phone'];
$resdate = $_POST['date'];
$restime = $_POST['time'];
$numguests  = $_POST['guests'];

if (!empty($name) && !empty($email) && !empty($phonenum) 
&& !empty($resdate) && !empty($restime) && !empty($numguests))
{

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "restaurant";

    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
    }
    else{
        $SELECT = "SELECT email FROM reservation WHERE email = ? LIMIT 1";
        $INSERT = "INSERT INTO reservation (name, email, phone, date, time, guests) values (?, ?, ?, ?, ?, ?)";

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

            $stmt->bind_param("ssissi", $name, $email, $phonenum, $resdate, $restime, $numguests);
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
