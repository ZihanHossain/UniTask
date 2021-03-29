<?php
$message = '';
$error = '';
if (isset($_POST["submit"])) {
    if (empty($_POST["name"])) {
        $error = "<label>Enter Name</label>";
    } else if (empty($_POST["gender"])) {
        $error = "<label>Enter Gender</label>";
    } else if (empty($_POST["email"])) {
        $error = "<label>Enter Email</label>";
    } else if (empty($_POST["username"])) {
        $error = "<label>Enter User Name</label>";
    } else if (empty($_POST["password"])) {
        $error = "<label>Enter Password</label>";
    } else if (empty($_POST["confirmpassword"])) {
        $error = "<label>Enter Confirm Password</label>";
    } else if (empty($_POST["dateofbirth"])) {
        $error = "<label>Enter Date of Birth</label>";
    } else {
        require_once 'controller/addDoctor.php';
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
    <title>Registration</title>
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
    <div class="container">
        <legend>REGISTRATION</legend>
        <form method="POST" action="registration.php">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Use Name</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="confirmpassword" class="form-control">
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-2">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                </div>
                <div class="col-lg-2">
                    <div class="form-check">
                        <input type="radio" name="gender" value="male" id="gridRadios1" class="form-check-input">
                        <label class="form-check-label" for="gridRadios1">Male</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="gender" value="female" id="gridRadios2" class="form-check-input">
                        <label class="form-check-label" for="gridRadios2">Female</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="gender" value="other" id="gridRadios3" class="form-check-input">
                        <label class="form-check-label" for="gridRadios3">Other</label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="date" name="dateofbirth">
                    </fieldset>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <?php if (isset($_POST["submit"])) echo $error ?>
                </div>
            </div>
            <br>
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <input type="submit" name="submit" class="btn btn-primary">
                    <input type="reset" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</body>

</html>