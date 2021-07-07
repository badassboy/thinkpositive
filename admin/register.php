<?php
include_once 'lib/register.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/main.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <title>Register | <?=tp_app_admin?></title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="register-form" method="post" onSubmit="return checkform()">
                <input type="text" placeholder="First Name" id="fname" value="<?=$user_fname?>" name="user_fname"/>
                <input type="text" placeholder="Last Name" id="lname" value="<?=$user_lname?>" name="user_lname"/>
                <input type="email" placeholder="Email Address" id="email" value="<?=$user_id?>" name="user_email"/>
                <input type="password" placeholder="Password" id="pass" value="<?=$user_pass?>" name="user_pass"/>
                <input type="password" placeholder="Repeat Password" id="rpass" value="<?=$user_rpass?>" name="user_rpass"/>
                <button>create</button>
                <p class="message">Already registered? <a href="login.php">Log In</a></p>
            </form>
        </div>
    </div>
    <script src="js/main.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/notify.js"></script>

    <script>
        <?php if (isset($_SESSION['think_mgs'])) { echo $_SESSION['think_mgs']; unset($_SESSION['think_mgs']); }?>
    </script>

    <script>
        function checkform() {
            var fname = document.getElementById('fname').value;
            var lname = document.getElementById('lname').value;
            var email = document.getElementById('email').value;
            var pass = document.getElementById('pass').value;
            var rpass = document.getElementById('rpass').value;
            if (fname === '') {
                $.notify("Enter Your First Name!", "error");
                return false;
            } else if (lname === '') {
                $.notify("Enter Your Last Name!", "error");
                return false;
            } else if (email === '') {
                $.notify("Enter Your Email Address!", "error");
                return false;
            } else if (pass === '') {
                $.notify("Enter Your Password!", "error");
                return false;
            } else if (rpass === '') {
                $.notify("Repeat Your Password!", "error");
                return false;
            } else if (rpass != pass) {
                $.notify("Password Mismatch!", "error");
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>

</html>