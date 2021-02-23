<?php
$message = "";
if ($_POST["cpass"] == $_POST["npass"]) {
    $message = "New and Current pass can not be same.";
}
if(!($_POST["npass"] == $_POST["rnpass"])){
    $message = "New password and Retype New Password must be same.";
}
if ((strlen($_POST["cpass"]) < 1) or (strlen($_POST["npass"]) < 1) or (strlen($_POST["rnpass"]) < 1)) {
    $message = "You must fill up every requirement.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>CHANGE PASSWORD</legend>
        <form method="POST" action="changepassword.php">
            <table>
                <tr>
                    <td>
                        <label>Current Password</label>
                    </td>
                    <td>
                        <label> :</label>
                        <input type="password" name="cpass">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="color: red;">New Password</label>
                    </td>
                    <td>
                        <label> :</label>
                        <input type="password" name="npass">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="color: red;">Retype New Password</label>
                    </td>
                    <td>
                        <label> :</label>
                        <input type="password" name="rnpass">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br>
                        <label style="color: red;"><?php echo $message ?></label>
                    </td>
                </tr>
            </table>
            <hr>
            <input type="submit">
        </form>
    </fieldset>
</body>

</html>