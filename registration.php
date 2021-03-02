<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
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
    ?>
    <!--    // When form submitted, insert values into the database.-->
    <!--    if (isset($_REQUEST['username'])) {-->
    <!--        // removes backslashes-->
    <!--        include("request_user.php");-->
    <!--        include("user_validation.php");-->
    <!--        $user = null;-->
    <!--        if (!$subscribed) {-->
    <!--            $query = "INSERT into `signup` (username, email, password, password_rep)-->
    <!--                        VALUES ('$username', '$email' , '" . md5($password) . "', '" . md5($password) . "')";-->
    <!--            $user = mysqli_query($con, $query);-->
    <!--        }-->
    <!--    } else {-->
    <!---->
    <!--        ?>-->
    <div id="success-registration" hidden>
        <div class='form'>
            <p class='message-text'>You are registered successfully.</p><br/>
            <a class='login_p' href='login.php'>Click here to Login.</a>
        </div>
        <div class='form'>
            <p class='message-text'>The email already exists!</p><br/>
            <a class='login_p' href='registration.php'>Click here to registration again.</a>
        </div>
    </div>
    <div id="registration-form">
        <div class="form">
            <p class="reg-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis sagittis
                sem, id
                eleifend libero maximus elementum. Aliquam at interdum ex. Fusce ut dui auctor, vulputate arcu et,
                interdum
                lorem. Aliquam consequat placerat risus in commodo. In consequat arcu id nisl lacinia
                facilisis. </p>
            <p class="create_text">Δημιουργήστε έναν λογαριασμό!</p>
            <label><i class="fas fa-user"></i></label>
            <input type="text" class="login-input" name="username" placeholder="Username" required/>
            <!-- <div id="emailError" class='error-email' hidden>
                <span> dis is wrong</span>
            </div> -->
            <label><i class="fas fa-user"></i></label>
            <input id="input-email" type="email" class="login-input loginemail" name="email" placeholder=" Email Adress"
                   required>
            <label><i class="fas fa-unlock-alt"></i></label>
            <input type="password" class="login-input" name="password" placeholder="Password" required>
            <label><i class="fas fa-unlock-alt"></i></label>
            <input type="password" class="login-input" name="password_rep" placeholder="Password" required>
            <button name="submit" value="Sign Up" class="login-button" onclick="validate()"></button>
            <p class="login_p"><a href="login.php">Έχετε ήδη λογαριασμό; Επιστροφή στην σελίδα σύνδεσης</a></p>
        </div>
    </div>
    <?php
    //    }
    ?>
</div>
<script type="text/javascript">
    function validate() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                // Typical action to be performed when the document is ready:
                document.getElementById("success-registration").hidden = false;
                document.getElementById("registration-form").hidden = true;
                console.log('you did it!!');
                // window.location.href = '';
            } else {
                console.log(this);
                console.log('damn');
            }
        }
        let theEmail = document.getElementById('input-email').innerText
        console.log('hey ' + theEmail)
        xhttp.open("GET", "validate.php?email1=" + theEmail, true);
        xhttp.send();
    }
</script>
</body>
</html>