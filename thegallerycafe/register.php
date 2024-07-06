<?php

$vehtype = $_POST['vehitype'];
$noplate  = $_POST['platenum'];
$name = $_POST['name'];
$contact = $_POST['connum'];
$resname = $_POST['resname'];
$resdate  = $_POST['resdate'];
$request = $_POST['request'];

if (!empty($vehtype) && !empty($noplate) && !empty($name) 
&& !empty($contact) && !empty($resname) && !empty($resdate)
&& !empty($request))
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
        $SELECT = "SELECT platenum FROM parking WHERE platenum = ? LIMIT 1";
        $INSERT = "INSERT INTO parking (vehitype, platenum, name, connum, resname, resdate, request) values (?, ?, ?, ?, ?, ?, ?)";

        // Prepare statement
        $stmt = $conn->prepare($SELECT);
        if ($stmt === false) {
            die('Prepare error: ' . htmlspecialchars($conn->error));
        }

        $stmt->bind_param("s", $noplate);
        $stmt->execute();
        $stmt->bind_result($noplate);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum == 0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            if ($stmt === false) {
                die('Prepare error: ' . htmlspecialchars($conn->error));
            }

            $stmt->bind_param("sssssss", $vehtype, $noplate, $name, $contact, $resname, $resdate, $request);
            $stmt->execute();
            echo 
            '<script>
                alert("New record inserted successfully!");
                window.location.href = "index.html";
            </script>';
        } else {
            echo
            '<script>
                alert("Someone already registered with this plate number.");
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
