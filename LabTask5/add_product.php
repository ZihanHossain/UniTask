<?php
require_once 'model.php';
$message = "";

if(isset($_POST["show"]) || isset($_POST["save"]))
{
    $data['name'] = $_POST['name'];
    $data['bprice'] = $_POST['bprice'];
    $data['sprice'] = $_POST['sprice'];

    if(addProduct($data))
    {
        $message = "Product Successfully added!!";
    }
}

?>
