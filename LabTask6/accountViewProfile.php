<?php

session_start();
if ($_SESSION['user'] == '') {
    header("Location: login.php");
}

require_once 'controller/accountViewProfile.php';

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
                    <a class="list-group-item list-group-item-action" href="dashbord.php?flag=dashbord">Dashbord</a>
                    <a class="list-group-item list-group-item-action" href="accountViewProfile.php">View profile</a>
                    <a class="list-group-item list-group-item-action" href="editProfile.php">Edit profile</a>
                    <a class="list-group-item list-group-item-action" href="dashbord.php?flag=changeprofilepicture">Change profile picture</a>
                    <a class="list-group-item list-group-item-action" href="changePassword.php">Change password</a>
                </div>
            </div>
            <div class="col-9">
                <div class="container">
                    <div class="row">
                        <legend>View Profile</legend>
                    </div>
                    <div class="row">
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="container">
                                <div class="row">
                                    <div class="col-4">
                                        <span>Name</span>
                                    </div>
                                    <div class="col-8">
                                        <span>: <?php echo $name ?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <span>Email</span>
                                    </div>
                                    <div class="col-8">
                                        <span>: <?php echo $email ?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <span>Gender</span>
                                    </div>
                                    <div class="col-8">
                                        <span>: <?php echo $gender ?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <span>Date of Birth</span>
                                    </div>
                                    <div class="col-8">
                                        <span>: <?php echo $dateofbirth ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            Picture
                        </div>
                    </div>
                </div>'
            </div>
        </div>
    </div>
</body>

</html>