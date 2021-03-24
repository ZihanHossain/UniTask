<?php

require_once 'db_connect.php';

function addProduct($data)
{
    $conn = db_conn();
    $query = "INSERT into product (name, buying_price, selling_price) 
           VALUES (:name, :bprice, :sprice)";
    try{
        $stmt = $conn->prepare($query);
        $stmt->execute([
            ':name' => $data['name'],
            ':bprice' => $data['bprice'],
            ':sprice' => $data['sprice']  
        ]);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function showAllProducts(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `product` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showProduct($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `product` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchProduct($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `product` WHERE name LIKE '%$user_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function updateProduct($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE product set name = ?, buying_price = ?, selling_price = ? where id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['buying_price'], $data['selling_price'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteProduct($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `product` WHERE `id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}


?>