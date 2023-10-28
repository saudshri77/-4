<?php
if (isset ($_POST['submit'])) {

 $firstName = $_POST['firstName'];
    $firstName = $_POST[('lastName')];
    $firstName = $_POST[('email')];

$errors = [
    'firstNameError'=> '',
    'lastNameError'=> '',
    'emailError'=> '',
];

   


    

$firstName = mysqli_real_escape_string($conn,$_POST['firstName'] );

$lastName  = mysqli_real_escape_string($conn, $_POST['lastName']);

$email = mysqli_real_escape_string($conn, $_POST['email']);



//echo $firstName . '/ ' . $lastName . '/ ' . $email;


$sql = "INSERT INTO users (firstName , lastName , email) VALUES('$firstName' , '$lastName' , '$email')";


if(empty($firstName)){

$errors['firstNameError'] = 'يرجى ادخال الاسم الاول ';

} if(empty($lastName)){
    $errors['lastNameError'] = 'يرجى ادخال الاسم الاخير ';
   

 }if(empty($email)){
    $errors['emailError'] = 'يرجى ادخال الايميل ';
 
 }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['emailError'] = 'يرجى ادخال ايميل صحيح ';
   
 }else {
    if(mysqli_query($conn, $sql)){
 
     header('Location:' .  $_SERVER['PHP_SELF']);
 
 }else{
    echo 'Error: ' . mysqli_error($conn);
 }
 

}



}
