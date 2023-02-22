<?php error_reporting (E_ALL ^ E_NOTICE); ?>
  
  <?php
 
 


$conn = mysqli_connect('localhost', 'root','',  'meronotesdatabase') or die("Cannot Connect Database".$connection->error);
session_start();
$name= $_POST['fullName'];
$email= $_POST['email'];
$_SESSION['mail'] = $email;
$password= $_POST['password'];
$conPassword= $_POST['conPassword'];
if (empty($name) || empty($email) || empty($password) || empty($conPassword)) {  
  echo 5; 
  exit;
}

if(strlen($password) < 8) {
    echo 6;
    exit;
};


if($password!=$conPassword){
  echo 3;
  exit;
}
$vkey=bin2hex(random_bytes(16));
$user_exist_query="SELECT * from signupdatabasemn where email='$email'";
$result=mysqli_query($conn,$user_exist_query);

if(mysqli_num_rows($result)>0){
  echo 1;
  exit;
      }else{
       
      
      
        $otp = rand(100000,999999);  
        $_SESSION['otp'] = $otp;
          $vStatus=0;
           $epassword=password_hash($password,PASSWORD_BCRYPT);
            $sql = "INSERT INTO signupdatabasemn (fullName, email, password, address, phoneNum, vKey, vStatus)
              VALUES ( '$name', '$email', '$epassword', 'Address', 'Contact', '$otp', 0)";
                $result2= mysqli_query($conn, $sql);
                
              }
  

 if ($result2 ) {
  
  $_SESSION['otp'] = $otp;
  $_SESSION['name'] = $name;
  $_SESSION['mail'] = $email;
  require "Mail/phpmailer/PHPMailerAutoload.php";
  $mail = new PHPMailer;

  $mail->isSMTP();
  $mail->Host='smtp.gmail.com';
  $mail->Port=587;
  $mail->SMTPAuth=true;
  $mail->SMTPSecure='tls';
  $mail->Username='rml.ditik69@gmail.com';
  $mail->Password='ctmphkvhwufgsbvv';
  $mail->setFrom('email account', 'OTP Verification');
  $mail->addAddress($_POST["email"]);
  $mail->isHTML(true);
  $mail->CharSet='UTF-8';
  $mail->Subject="Your verify code";
  $mail->Body='<div class="mailHeading" style="text-align: center;
  background-color: #5b5e5f71;
  height: 8vh;
  border-radius: 15px;
  padding-top: 16px;">   
  

     
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <span  style="margin-top: 100%;
    font-size: 1.8em;
    text-transform: uppercase;
    border-left: 5px solid rgb(93, 128, 164);
    padding-top: 50%;
    padding: 0 10px 0 10px;
    color: black;
    letter-spacing: 5px;
    margin-bottom: 10px;
    font-weight: bold;
    padding-left: 15px;">Mero <text style="color: #5b869a;;">Notes</text></span>
  </div>
  <div class="mailContent" style=" text-align: center;
  margin-top: -10px; color: black;
  background-color: rgba(126, 199, 199, 0.159);">
    <p style="font-weight: 400;
    font-size: 21px;
    color: black;
  text-align: left;">Dear <strong>'.$name.', </strong></p> 
    <div class="mail" style="background-color: rgba(89, 131, 161, 0.479); color: black;
    height: 53vh;
    padding-top: 20px;">
      <h3 style=" text-align: center;">Your Verification Code is: <br><br><span style="background-color: rgba(44, 221, 28, 0.618);
        padding: 19px;
        padding-left: 22px;
        color: black;
        letter-spacing: 10px;
        border-radius: 10px;
          font-size: 30px;">'.$otp.'</span> <br></h3>
    <br><p class="or" style="margin-top: -3px;
    color: black;
    text-align: center;
    text-transform: uppercase;
    font-weight: 800;
    font-size: 20px;">Or</p><br> <p class="verify" style="text-align: center; color: black;
  margin-top: -20px;
  font-size: 21px;
  font-weight: 400;">Click the Link Below to Verify<br></p> 
    <br>
    <a style="  color: black;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 22px;
    background-color: rgba(44, 221, 28, 0.618);
    padding: 13px;
    font-weight: 500;" href="http://localhost/demosite3fnl/otpVerify.php?email='.$email.'&vKey='.$otp.'">Verify Now</a>
  </div>
    <p style="font-weight: 600;
    font-size: 21px;
  text-align: left;">With Regards,</p>
  
  </div>
 

  ';
          if($mail->send()){
           echo 2;
           
          }else{ 
            $removeQuery="DELETE FROM signupdatabasemn WHERE email='$email'";
            $conn->query($removeQuery);
          
           
                
          
                            }
              
                          }
            
        
          
        

?>