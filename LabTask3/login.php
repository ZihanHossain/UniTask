<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"])) {
        $name = $_POST["username"];
        if (strlen($name) < 2) {
            $nameerror = "* Name must be atleast of 2 alphabet";
        } else if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameerror = "* Only letters and white space allowed";
        }
    }

    if (isset($_POST["password"])) {
        $password = $_POST["password"];
        if (strlen($password) < 2 or strlen($password) > 8) {
            $passerror = "* Password must be less then 2 and grater than 8 characters";
        } else if (!preg_match("/[@#$%]+/", $password)) {
            $passerror = "* Must contain atlest one of # $ % @";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <fieldset>
            <legend>LOGIN</legend>
            <label>User Name: </label>
            <input type="text" name="username">
            <label style="color: red;"><?php if (isset($nameerror)) echo $nameerror ?></label>
            <br>
            <label>Password: </label>
            <input type="text" name="password">
            <label style="color: red;"><?php if (isset($passerror)) echo $passerror ?></label>
            <br>
            <hr>
            <input type="checkbox" name="remember">
            <label>Remember Me</label>
            <br>
            <br>
            <input type="submit" name="submit">
        </fieldset>
    </form>
</body>

</html>