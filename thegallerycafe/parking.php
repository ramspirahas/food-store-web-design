<?php
    include('conn.php');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Services</title>
    <link rel="icon" href="Images/parking.png">
    <link rel="stylesheet" href="parkingStyle.css">
    <script src="https://kit.fontawesome.com/530a970965.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <div class="logo">
            <div class="icon">
                <p>
                    <i class="fa-solid fa-utensils"></i>
                    The Gallery Cafe
                </p>
            </div>


        </div>

        <div class="navlinks">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Reservation</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Login</a></li>

            </ul>
        </div>
    </nav>

    <section class="workForm">
        <div class="container">
             <div class="title">
                 Parking Availability<i class="fa-solid fa-car"></i>
             </div>
             <form action="register.php" method = "post">
                 <div class="user-Details">
                     <div class="input-box">
                         <span class="details">Vehicle Registration Type</span>
                         <input type="text" placeholder="Vehicle Registration Type" name="vehitype" required>
                     </div>
 
                     <div class="input-box">
                         <span class="details">Number Plate</span>
                         <input type="text" placeholder="Number Plate" name="platenum" required>
                     </div>
 
                     <div class="input-box">
                         <span class="details">Your Name</span>
                         <input type="text" placeholder="Enter your name" name="name" required>
                     </div>
 
                     <div class="input-box">
                         <span class="details">Contact number</span>
                         <input type="text" placeholder="Enter your contact number" name="connum" required>
                     </div>
 
                     <div class="input-box">
                         <span class="details">Reservation Name</span>
                         <input type="text" placeholder="Enter your reservation name" name="resname" required>
                     </div>
 
                     <div class="input-box">
                         <span class="details">Reservation Date</span>
                         <input type="Date" placeholder="Date" name="resdate" required >
                     </div>
                 </div>
                 <div class="input-box">
                     <span class="details">Special Request</span>
                     <input type="text" id="jobDes" placeholder="Special request" name = "request" required>
                 </div>
                 <div class="register">
                 <!--<button type="register" value="Login" id="send" onclick="message()">Register</button>-->
                 <button type="submit" name="" onclick="message()" value="Register">Submit</button>
 
             </div>
             </form>
        </div>
     </div>
</body>
</html>
