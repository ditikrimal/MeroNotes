<?php error_reporting (E_ALL ^ E_NOTICE); ?>
  
  <?php
 
 


$conn = mysqli_connect('localhost', 'root','',  'meronotesdatabase') or die("Cannot Connect Database".$connection->error);
session_start();
$sesEmail = $_SESSION['user_id'];
$name= $_POST['fullName'];
$email= $_POST['email'];
$_SESSION['mail'] = $email;
$address= $_POST['address'];
$phoneNum= $_POST['phoneNum'];
$password= $_POST['password'];
console.log('$sesEmail');

$conPassword= $_POST['conPassword'];
if(strlen($password) < 8) {
    echo 2;
    exit;
};


if($password!=$conPassword){
  echo 3;
  exit;
}else{

$sql = "UPDATE signupdatabasemn SET fullName='$name', password='$password', phoneNum='$phoneNum', address='$address'   WHERE email='$sesEmail'";
                $result= mysqli_query($conn, $sql);
                if($result){
                    echo 1;
                }
                
            };
            ?>