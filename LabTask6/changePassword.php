<?php

session_start();
if ($_SESSION['user'] == '') {
    header("Location: login.php");
}

require_once 'controller/changePassword.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Dashbord</title>
</head>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="assets/logo.png" width="120" height="120">
            </div>
            <div class="col-sm nav justify-content-end align-self-center">
                <a class="nav-link" href="dashbord.php?flag=dashbord">Welcome <?php echo $_SESSION["user"] ?></a>
                <a class="nav-link" href="login.php?flag='logout">Log out</a>
            </div>
        </div>
    </div>
</header>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <legend>Account</legend>
                <hr>
                <div class="list-group" id="list-tab">
                    <a class="list-group-item list-group-item-action" href="dashbord.php">Dashbord</a>
                    <a class="list-group-item list-group-item-action" href="accountViewProfile.php">View profile</a>
                    <a class="list-group-item list-group-item-action" href="editProfile.php">Edit profile</a>
                    <a class="list-group-item list-group-item-action" href="dashbord.php?flag=changeprofilepicture">Change profile picture</a>
                    <a class="list-group-item list-group-item-action" href="dashbord.php?flag=changepassword">Change password</a>
                </div>
            </div>
            <div class="col-9">
                <div class="container">
                    <div class="row">
                        <legend>Change Password</legend>
                    </div>
                    <form method="POST" action="changePassword.php">
                        <div class="row">
                            <hr>
                        </div>
                        <div class="row">
                            <label class="form-label">Old Password: </label>
                            <input type="password" class="form-control" name="oldPassword">
                        </div>
                        <div class="row">
                            <label class="form-label">New Password: </label>
                            <input type="password" class="form-control" name="newPassword">
                        </div>
                        <div class="row">
                            <label class="form-label">Confirm Password: </label>
                            <input type="password" class="form-control" name="confirmPassword">
                        </div>
                        <br>
                        <div class="row">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <br>
                        <div class="row">
                            <span class="alert-warning"><?php echo $message ?></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>