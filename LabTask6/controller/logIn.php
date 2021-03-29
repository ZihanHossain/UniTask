<?php

require_once 'model.php';
$info = login($_POST['username'], $_POST['password']);

if ($info == $_POST['password']) {
    header("Location: dashbord.php?flag=dashbord");
    $_SESSION['user'] = $_POST['username'];
    exit();
}
else{
    $error = "Wrong User Name or Password";
}



?>