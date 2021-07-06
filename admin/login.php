<?php
include_once 'lib/login.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Login | <?=tp_app_admin?></title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" method="post" onSubmit="return checkform()">
                <input type="email" placeholder="Email Address" id="email" name="user_email" value="<?=$user_id?>"/>
                <input type="password" placeholder="Password" id="pass" name="user_pass" value="<?=$user_pass?>"/>
                <button>login</button>
                <p class="message">Not registered? <a href="register.php">Register</a></p>
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
            var email = document.getElementById('email').value;
            var pass = document.getElementById('pass').value;
            if (email === '') {
                $.notify("Enter Your Email Address!", "error");
                return false;
            } else if (pass === '') {
                $.notify("Enter Your Password!", "error");
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>

</html>