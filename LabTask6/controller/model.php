<?php

require_once 'db_connect.php';

function addDoctor($data)
{
    $conn = db_conn();
    $query = "INSERT into doctor (full_name, u_name, password, dateofbirth, email, gender) 
           VALUES (:name, :username, :password, :dateofbirth, :email, :gender)";
    try {
        $stmt = $conn->prepare($query);
        $stmt->execute([
            ':name' => $data['name'],
            ':username' => $data['username'],
            ':password' => $data['password'],
            ':dateofbirth' => $data['dateofbirth'],
            ':email' => $data['email'],
            ':gender' => $data['gender']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function login($user_name, $password)
{
    $conn = db_conn();
    $selectQuery = "SELECT password FROM `doctor` WHERE u_name LIKE '%$user_name%' AND password LIKE '%$password'";


    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchColumn();
    return $rows;
}

function viewProfile($user_name)
{
    $conn = db_conn();
    $selectQuery = "SELECT full_name, email, gender, dateofbirth FROM `doctor` WHERE u_name LIKE '%$user_name%'";


    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetch();
    return $rows;
}

function editProfile($data)
{
    $conn = db_conn();
    $user_name = $_SESSION['user'];
    $query = "UPDATE doctor 
        SET full_name = :name, u_name = :username, dateofbirth = :dateofbirth, 
        email = :email, gender = :gender
        WHERE u_name LIKE '%$user_name%'";
    try {
        $stmt = $conn->prepare($query);
        $stmt->execute([
            ':name' => $data['name'],
            ':username' => $data['username'],
            ':dateofbirth' => $data['dateofbirth'],
            ':email' => $data['email'],
            ':gender' => $data['gender']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function changePassword($data)
{
    $conn = db_conn();
    $user_name = $_SESSION['user'];
    $query = "UPDATE doctor 
        SET password = :password
        WHERE u_name LIKE '%$user_name%'";
    try {
        $stmt = $conn->prepare($query);
        $stmt->execute([
            ':password' => $data
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function matchPassword($user_name)
{
    $conn = db_conn();
    $selectQuery = "SELECT password FROM `doctor` WHERE u_name LIKE '%$user_name%'";


    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchColumn();
    return $rows;
}
