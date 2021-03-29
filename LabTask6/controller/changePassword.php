<?php

require_once 'model.php';

$message = '';

if (isset($_POST['submit'])) {
    if ($_POST['newPassword'] == $_POST['confirmPassword']) {
        if(matchPassword($_SESSION['user']) == $_POST['oldPassword'])
        {
            if(changePassword($_POST['newPassword']))
            {
                $message = "Password changed successfully!";
            }
        }
        else
        {
            $message = "Current Password is worng.";
        }
    }
    else
    {
        $message = "New Password and Confirm Password is not matched.";
    }
}