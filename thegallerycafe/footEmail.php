<?php

$email = $_POST['email'];


if (!empty($email))
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "restaurant";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
    $SELECT = "SELECT email From getemail Where email = ? Limit 1";
  $INSERT = "INSERT Into getemail (email)values(?)";


  $stmt = $conn->prepare($SELECT);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->bind_result($email);
  $stmt->store_result();
  $rnum = $stmt->num_rows;

      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("s", $email);
      $stmt->execute();
      echo 
      '<script>
                alert("New mail inserted sucessfully!");
                window.location.href = "index.html";
      </script>';
     } else {
      echo
      '<script>
                alert("Someone already register.");
                window.location.href = "index.html";
      </script>';
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>