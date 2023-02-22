<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php 

session_start();

$email= $_SESSION['mail'];
$otp = $_POST ['otp'];
$errorPage=" <html>
<body>
<script src='https://kit.fontawesome.com/eac1eb5eeb.js' crossorigin='anonymous' async></script>
    <div class='main' style='display: flex;
    justify-content: center;'>
<img src='Image/error.webp' style='margin-top: 2%;
width: 27%;'>
</div>
<div class='mainContent' style='margin-top: 2%;
display: flex;
justify-content: center;'>
<span style='font-size: 30px;
font-weight: 100;
text-transform: uppercase;
letter-spacing: 3px;
font: 2em sans-serif;'>
    an error occured.
  </span>
</div>
<div class='content' style='display: flex;
justify-content: center;
font: 1.3em sans-serif;
letter-spacing: 2px;'>
<p>
    This verification link has already expired. </strong>
  </p>
</div>

</body>
</html>";

$conn = mysqli_connect('localhost', 'root','',  'meronotesdatabase') or die("Cannot Connect Database".$connection->error);

if(isset($_GET['email']) && isset($_GET['vKey'])){

    $vKey=$_GET['vKey'];
    $email=$_GET['email'];
    $query="SELECT vStatus,vKey,regDate,fullName from signupdatabasemn WHERE email='$_GET[email]' LIMIT 1";
    $result=mysqli_query($conn,$query);
    $dataFetch=mysqli_fetch_assoc($result);
    $name=$dataFetch['fullName'];
    $dbKey=$dataFetch['vKey'];
    if($dataFetch['vStatus']==1){
      echo $errorPage;
      exit;
    };
    $dataFetch['vKey']==$vKey;
        $update="UPDATE signupdatabasemn SET vStatus = 1 WHERE email='$_GET[email]' ";
            mysqli_query($conn,$update);
            if(mysqli_query($conn,$update)){
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
              $mail->addAddress($email);
              $mail->isHTML(true);
              $mail->Subject="Your account has been created successfullly.";
              $mail->Body='<div class="mailHeading" style="text-align: center;
              background-color: #5b5e5f71;
              height: 8vh;
              border-radius: 15px;
              padding-top: 16px;">   
            
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
              margin-top: 5px; color: black;
              background-color: rgba(126, 199, 199, 0.159);">
                
                <div class="mail" style="background-color: rgba(89, 131, 161, 0.479); color: black;
                height: 53vh;
                padding-top: 20px;">
                  <h3 style=" text-align: center; font-size: 25px; text-transform: uppercase;">Congratulations '.$name.' <br><br></h3>
                <p class="or" style="margin-top: -3px;
                color: black;
                text-align: center;
                
                text-transform: capitalize;
                letter-spacing: 1px;word-spacing: 5px;
                font-weight: 800;
                font-size: 20px;">Your Account has been Created Successfully. <br>
              Enjoy services from Mero Notes.  
              
              </p><br>
                
                <a style="  color: black;
                text-align: center;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 22px;
                background-color: rgba(44, 221, 28, 0.618);
                padding: 13px;
                font-weight: 500;" href="http://localhost/demosite3fnl/index.php">Go to Login</a>
              </div>
              
              
              </div>';
              $mail->send();
                header('Location: /demosite3fnl/index.php');
               
            }
        
        }elseif(isset($otp)){
          $otp = $_POST ['otp'];
          $query="SELECT vStatus,vKey,fullName from signupdatabasemn WHERE email= '$email' ";
          $result=mysqli_query($conn,$query);
          $fetch=mysqli_fetch_assoc($result);
          $name=$fetch['fullName'];
          if($fetch['vStatus']==1){
            echo 7;
            exit;
          };
          $userName=$fetch['fullName'];
          if($fetch['vKey']==$otp){
              $update="UPDATE signupdatabasemn SET vStatus = 1 WHERE email='$email' ";
                   mysqli_query($conn,$update);
                      if(mysqli_query($conn,$update)){
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
                          $mail->addAddress($email);
                          $mail->isHTML(true);
                          $mail->Subject="Your account has been created successfullly.";
                          $mail->Body='<div class="mailHeading" style="text-align: center;
                          background-color: #5b5e5f71;
                          height: 8vh;
                          border-radius: 15px;
                          padding-top: 16px;">   
                        
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
                          margin-top: 5px; color: black;
                          background-color: rgba(126, 199, 199, 0.159);">
                            
                            <div class="mail" style="background-color: rgba(89, 131, 161, 0.479); color: black;
                            height: 53vh;
                            padding-top: 20px;">
                              <h3 style=" text-align: center; font-size: 25px; text-transform: uppercase;">Congratulations '.$name.' <br><br></h3>
                            <p class="or" style="margin-top: -3px;
                            color: black;
                            text-align: center;
                            
                            text-transform: capitalize;
                            letter-spacing: 1px;word-spacing: 5px;
                            font-weight: 800;
                            font-size: 20px;">Your Account has been Created Successfully. <br>
                          Enjoy services from Mero Notes.  
                          
                          </p><br>
                            
                            <a style="  color: black;
                            text-align: center;
                            text-decoration: none;
                            text-transform: uppercase;
                            font-size: 22px;
                            background-color: rgba(44, 221, 28, 0.618);
                            padding: 13px;
                            font-weight: 500;" href="http://localhost/demosite3fnl/index.php">Go to Login</a>
                          </div>
                          
                          
                          </div>';
                          $mail->send();
                          echo 2;
                      }
                         
  
              
                 
                  
                  }else{
       
          echo 1;
          
      }
    }else{
      echo $errorPage;
          
           
     

            $_SESSION['otp'] = $otp;
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
            $mail->addAddress($email);
          
            $mail->isHTML(true);
            $mail->Subject="New Verification Link";
            $mail->Body=
            "Hello World
            ";
          
            $mail->send();
         
       exit; 
    };

    
    
    ?>
    