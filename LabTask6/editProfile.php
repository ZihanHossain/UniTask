<?php

session_start();
if ($_SESSION['user'] == '') {
    header("Location: login.php");
}

require_once 'controller/editProfile.php';

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
                    <a class="list-group-item list-group-item-action" href="changePassword.php">Change password</a>
                </div>
            </div>
            <div class="col-9">
                <div class="container">
                    <legend>Edit Profile</legend>
                    <form method="POST" action="editProfile.php">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $name ?>">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="<?php echo $email ?>" required>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Use Name</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $username ?>">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-1">
                                <label class="form-label">Gender</label>
                            </div>
                            <div class="col-md-11">
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
                        <div class="row g-3">
                            <div class="col-md-auto">
                                <fieldset>
                                    <legend>Date of Birth</legend>
                                    <input type="date" name="dateofbirth" value="<?php echo $dateofbirth ?>">
                                </fieldset>
                            </div>
                        </div>
                        <!-- <div class="row g-3">
                            <div class="col-md-auto">
                                <?php if (isset($_POST["submit"])) echo $error ?>
                            </div>
                        </div> -->
                        <br>
                        <div class="row g-3">
                            <div class="col-md-auto">
                                <input type="submit" name="submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>