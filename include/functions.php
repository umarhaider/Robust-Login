<?php 

function checkEmptyInput($input){
    if(empty($input)){
        header('Location: ../index.php?code=emptydata');
        die();
    }
}

function checkEmail($input){
    if(filter_var($input, FILTER_VALIDATE_EMAIL)) {
            
    }
    else{
        header('Location: ../index.php?code=invalidemail');
        die();
    }
}

function checkname($input){
    if(is_numeric($input))
    {
        header('Location: ../index.php?code=invalidname');
        die();
    }
}

function checkAge($input, $min, $max){
    if(!is_numeric($input))
    {
        header('Location: ../index.php?code=invalidage');
        die();
    }
    if(($input >= $min) && ($input <= $max)){

    }
    else{
        header('Location: ../index.php?code=invalidage');
        die();
    }
}

function checkEmailExists($email, $pass, $name, $age){
    require 'conn.php';

    $query = "SELECT * FROM `customer` WHERE `email` = '" . $email . "'";

    $result = $conn->query($query);

    $rows = $result->num_rows;

    if ($rows != 0)
    {
        header('Location: ../index.php?code=emailexists');
    }
    else
    {
        registerNewUser($email, $pass, $name, $age);
    }
}

function registerNewUser($email, $pass, $name, $age){
    require 'conn.php';

    $query1 = "INSERT INTO `customer`(`email`, `password`, `name`, `age`) VALUES ('".$email."','".$pass."','".$name."','".$age."')";

    $result1 = $conn->query($query1);

    $rows1 = $result1->num_rows;

    if ($rows1 != 1)
    {
        header('Location: ../index.php?code=success');
    }
    else
    {
        header('Location: ../index.php?code=noinsert');
    }
}

?>