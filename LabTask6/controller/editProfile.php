<?php

$name = '';
$username = '';
$email = '';
$gender = '';
$dateofbirth = '';

require_once 'model.php';

$info = viewProfile($_SESSION['user']);

$name = $info['full_name'];
$username = $_SESSION['user'];
$email = $info['email'];
$gender = $info['gender'];
$dateofbirth = $info['dateofbirth'];


if(isset($_POST['submit']))
{
    $data['name'] = $_POST['name'];
    $data['username'] = $_POST['username'];
    $data['email'] = $_POST['email'];
    $data['gender'] = $_POST['gender'];
    $data['dateofbirth'] = $_POST['dateofbirth'];

    editProfile($data);
}
?>