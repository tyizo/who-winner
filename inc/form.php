<?php

include './db/database.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

if(isset($_POST['submit'])){

    if(empty($firstName)){
        $errors['firstNameError'] = 'يرجى أدخال الأسم الأول';
    }
    if(empty($lastName)){
        $errors['lastNameError'] = 'يرجى أدخال الأسم الأخير';
    }
    if(empty($email)){
        $errors['emailError'] = 'يرجى أدخال الأيميل';
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'يرجى كتابة الأيميل بشكل صحيح';
    }

    if(!array_filter($errors)) {
        $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
    
        $sql = "INSERT INTO users(firstName, lastName, email)
        VALUES ('$firstName','$lastName','$email')";
    
    if(mysqli_query($con , $sql)){
        header('Location: ' . $_SERVER['PHP_SELF']);
    }else { 
            echo 'Error: ' . mysqli_error($con);
        }    
    }
}