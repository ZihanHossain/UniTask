<?php

    require_once 'model.php';

    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['username'] = $_POST['username'];
    $data['password'] = $_POST['password'];
    $data['gender'] = $_POST['gender'];
    $data['dateofbirth'] = $_POST['dateofbirth'];
    if(addDoctor($data))
    {
        $message = "Registration Successfull";
    }

?>