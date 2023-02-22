
<!DOCTYPE html>
<html lang="en">
<head>

    <style>
    body{
     font-family: "Poppins", sans-serif;
     font-size: 14px;
     font-weight: 400;
     color: #1e1e27;
     background-color: rgb(108, 106, 106);
     background-image: url("lines-motion-8k-9x.jpg");
     background-repeat: no-repeat;
     background-size: cover;
     background-attachment: fixed;
     background-position: center;
     image-orientation: flip;
    }
   
      </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/eac1eb5eeb.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    
    <title>Mero Notes</title>
    <link rel="stylesheet" href="CSS/loginSignup.css">
    <script src="script.js"></script>
</head>
<body>
  
  <nav>
   <div class="logo"><a href="index.php"><h1>Mero <span> Notes</span></h1></div></a>
   <ul class="navBar"> 
    <li><a href="index.php">Home</a></li>
     <li><a href="notes.php">Notes</a></li>
   </ul>
  </nav>
  <div class="content">
    <h1>Register And<span> Get Benefit</span></h1>
    <p>Mero Notes distributes academic notes of different faculty to save your time. <button>Explore Notes</button></p>
  </div>
   
      <form action="" id="myForm" method="POST" autocomplete="off">
      <a style="text-decoration:none ;" href="index.php"><h1 >Mero <span>Notes</span></h1></a>
      <h3>Register Your Account</h3>  
      
          <p class="echoPar" id="RepMsg"style=""></p>
          
            
            <p id="validationSpan"></p>
          
            <input placeholder="Full Name" type="text" required="required" name="name" />
            <input placeholder="Email" type="text" required="required" name="email" />
            <input placeholder="Password" type="password" name="password" value="" required="required" id="id_password" minlength="8" onkeyup="passValidation();"/>
            <input placeholder="Confirm Password" type="password" name="conPassword"  required="required" id="id_conPassword" onkeyup="passValidation();"/>
            <input  placeholder="Contact" type="number" required="required"  name="contactNum" />
            <button name="submitBtn" type="submit" class="regButton" value="Sign Up" id="regBtn" onclick="passValidationAlert();">SignUp </button>
        <h4 style="text-align: right; color:black;font-size:12px;">
          Already Have an Account ?
          <a class="buttomLogin" href="index.php">Login here</a>
        </h4>
      </form>
      <div class="hidden" id="popup">
                Hello World
                
    </div>
    
      <script type="text/javascript">
     $(document).ready(function(){
      $('#regBtn').click(function(){
        event.preventDefault();
        $.ajax({
          url:"register.php",
          type:"POST",
          data: $('#myForm').serialize(),
          beforeSend: function() {
            $('#RepMsg').fadeIn();
            $('#RepMsg').html('Sending OTP...');

    },
     success:function(response){
           if(response == 1){
            $('#RepMsg').fadeIn();
            $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>This Email is already Taken.')
          }else{ 
           window.location.replace('verify.php');
          }
          }
        })
      });

     });
    </script>
  

</html>
