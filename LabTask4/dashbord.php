<?php 
    include 'functions.php';
    $right;
    if($_GET["flag"] == "dashbord")
    {
        dashbord();
    }

    if($_GET["flag"] == "viewprofile")
    {
        viewProfile();
    }

    if($_GET["flag"] == "editprofile")
    {
        editProfile();
    }

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
                <a class="nav-link" href="">Welcome <?php echo $_SESSION["user"] ?></a>
                <a class="nav-link" href="">Log out</a>
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
                    <a class="list-group-item list-group-item-action" href="dashbord.php?flag=dashbord" >Dashbord</a>
                    <a class="list-group-item list-group-item-action" href="dashbord.php?flag=viewprofile" >View profile</a>
                    <a class="list-group-item list-group-item-action" href="dashbord.php?flag=editprofile" >Edit profile</a>
                    <a class="list-group-item list-group-item-action" href="dashbord.php?flag=changeprofilepicture" >Change profile picture</a>
                    <a class="list-group-item list-group-item-action" href="dashbord.php?flag=changepassword" >Change password</a>
                </div>
            </div>
            <div class="col-9">
                <?php if(isset($right)) echo $right; ?>
            </div>
        </div>
    </div>
</body>

</html>