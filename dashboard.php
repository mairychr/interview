<?php
//include auth_session.php file on all user panel pages
include("auth_session.php"); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"><meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
   
</head>
<body>
    <div class="container">
        <div class="topnav" id="menu">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">MENU</a>
        <a href="#home" class="active">Αρχική</a>
        <a href="#services">Υπηρεσίες</a>
        <a href="#profile">Προφίλ</a>
        <a href="#products">Προϊόντα</a>
        <a href="#contact">Επικοινωνία</a>
        </div>
    </div>
    <hr class="menu_hr">
    <div class="container">
        <div class="form">
            <p class="login_p">Hey, <?php echo $_SESSION['username']; ?>!</p>
            <p class="login_p">Email: <?php echo $_SESSION['email']; ?></p>
            <p class="login_p">You are now user dashboard page.</p>
            <p class="login_p"><a href="logout.php">Click here to Logout</a></p>
        </div>
    </div>
</body>
<script src="responsive_menu.js" />
</html>