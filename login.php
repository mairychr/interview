<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet"> 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="responsive_menu.js"></script>
</head>
<body>
<div class="container">
        <div class="topnav" id="menu">
        <a href="javascript:void(0);" class="icon" onclick="responsiveMenu()">MENU</a>
        <a href="#home" class="active">Αρχική</a>
        <a href="#cervices">Υπηρεσίες</a>
        <a href="#profile">Προφίλ</a>
        <a href="#products">Προϊόντα</a>
        <a href="#contact">Επικοινωνία</a>
        </div>
    </div>
    <hr class="menu_hr">
    <div class="container">
        <?php
            require('db.php');
            session_start();
            // When form submitted, check and create user session.
            if (isset($_POST['username'])) {
                $username = stripslashes($_REQUEST['username']);    // removes backslashes
                $username = mysqli_real_escape_string($con, $username);
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($con, $password);
                // Check user is exist in the database
                $query    = "SELECT * FROM `signup` WHERE username='$username'
                            AND password='" . md5($password) . "'";
                $result = mysqli_query($con, $query);
                $rows = mysqli_num_rows($result);
                if ($rows == 1) {
                    $user = mysqli_fetch_assoc($result);
                    $_SESSION['username'] = $username;
                    $_SESSION['email'] = $user['email'];
                    // Redirect to user dashboard page
                    header("Location: dashboard.php");
                } else {
                    echo "<div class='form'>
                        <h3>Incorrect Username/password.</h3><br/>
                        <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                        </div>";
                }
            } else {
        ?>
            <form class="form" method="post" name="login">
            <p class="reg-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis sagittis sem, id eleifend libero maximus elementum. Aliquam at interdum ex. Fusce ut dui auctor, vulputate arcu et, interdum lorem. Aliquam consequat placerat risus in commodo. In consequat arcu id nisl lacinia facilisis. </p>
                <p class="create_text">LOG IN</p> 
                <label><i class="fas fa-user"></i></label>
                <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
                <label><i class="fas fa-unlock-alt"></i></label>
                <input type="password" class="login-input" name="password" placeholder="Password"/>
                <input type="submit" value="Login" name="submit" class="login-button"/>
                <div class="login_container">
                <label><i class="fas fa-user"></i></label>
                    <p class="login_p"><a href="registration.php">Νέος Λογαριασμος</a></p>
                    <p class="login_p" style="font-style:italic;"><a href="#">Forgot Password?</a></p>
                </div>
        </form>
        <?php
            }
        ?>
</div>
</body>
</html>