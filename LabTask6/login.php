<?php

session_start();

if(isset($_GET['flag']))
{
    $_SESSION['user'] = '';
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) & isset($_POST["password"])) {
        require_once 'controller/logIn.php';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="assets/logo.png" width="120" height="120">
            </div>
            <div class="col-sm nav justify-content-end align-self-center">
                <a class="nav-link" href="Welcome.php">Home</a>
                <a class="nav-link" href="login.php">Login</a>
                <a class="nav-link" href="registration.php">Registration</a>
            </div>
        </div>
    </div>
</header>

<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <div class="center">
            <div class="container">
                <legend>LOGIN</legend>
                <div class="row g-2">
                    <div class="col-md-6">
                        <label class="form-label">User Name</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-6">
                        <label class="alert"><?php if (isset($error)) echo $error ?></label>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-6">
                        <input type="submit" name="login" value="Log In" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>