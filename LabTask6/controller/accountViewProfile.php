<?php

$name = '';
$email = '';
$gender = '';
$dateofbirth = '';

require_once 'model.php';

$info = viewProfile($_SESSION['user']);

$name = $info['full_name'];
$email = $info['email'];
$gender = $info['gender'];
$dateofbirth = $info['dateofbirth'];

?>