<?php
include 'app/login_cek.php';

// mengecek admin login atau tidak
if (isset($_SESSION['username'])) {
?>
    <script>
        alert('Anda sedang aktif, tidak dapat mengakses halaman ini!');
        window.location.href = 'dashboard';
    </script>
<?php
    return false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | O'Teras Cafe</title>


    <!-- Font Icon -->
    <link rel="stylesheet" href="asset_login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="asset_login/css/style.css">
</head>

<body>
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container position-center">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="asset web/Cafe.png"></figure>
                </div>

                <div class="signin-form" style="margin-top: 2rem;">
                    <div class="display-flex-center">
                        <img src="asset web/Cafe.png" alt="" width="20%">
                        <h4>
                            Welcome Admin <br>
                            O'Teras Cafe
                        </h4>
                    </div>
                    <form action="" method="POST" class="register-form" style="margin-top: 2rem;" id="login-form">
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="username" id="your_name" placeholder="Username" />
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="your_pass" placeholder="Password" />
                        </div>
                        <div class="form-group form-button display-flex-center">
                            <input type="submit" name="login" id="signin" class="form-submit" value="Log in" />
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>