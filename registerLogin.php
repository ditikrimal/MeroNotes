<?php
$connect=mysqli_connect('localhost','root','','meronotesdatabase') or die("Connection Failed");
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * from signupdatabasemn where email='$email'";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);
if ($count>0) {
  $fetch = mysqli_fetch_assoc($result);
  if($fetch["vStatus"] == 0){
    echo 1; 
}else if(password_verify($password,$fetch['password'])){
  session_start();  
  $_SESSION['loggedIn']=true;
  $_SESSION['user_id']=$_POST['email'];
  header('Location: /demosite3fnl/indexLogged.php');
}else{
 
 echo 2;
    }

    
}else{
  echo 2;
}


