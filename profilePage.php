

<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
$connect=mysqli_connect('localhost','root','','meronotesdatabase') or die("Connection Failed");
session_start();
$email = $_SESSION['user_id'];
$query="SELECT * from signupdatabasemn where email='$email'";
$result=mysqli_query($connect,$query);
$dataFetch=mysqli_fetch_assoc($result);

if  ($_SESSION['loggedIn'] != true){
  header('Location: /demosite3fnl/index.php');
}else{ 


?>
<html lang="en">
<head>
    <style>
    body{
    font-family: 'Poppins',sans-serif;
    /* background-color:#B7DCDC;*/
    background:white;

     background-repeat: no-repeat;
     background-size: cover;
     background-attachment: fixed;
     background-position: center;
     image-orientation: flip;
    }
   
      </style>
     
</head>
<body>
  <!-- <Required Scripts> -->



  

  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/eac1eb5eeb.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/profilePage.scss">
    <script src="https://kit.fontawesome.com/eac1eb5eeb.js" crossorigin="anonymous" async></script>
   
  <!--   <script src="https://apis.google.com/js/platform.js" async defer></script> 
    <script src="https://kit.fontawesome.com/eac1eb5eeb.js" crossorigin="anonymous" async></script>
    <meta name="google-signin-client_id" content="1054274045332-jq6do5nb5vqonl8jjvgo99933reaudpc.apps.googleusercontent.com">
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0&appId=580551203867735&autoLogAppEvents=1" nonce="sBAVTL5R"></script>
    -->
 <!-- </Required Scripts> -->

 <title>Mero Notes</title>


  
  
 <nav>
 <div class="container">
  
  <h1><a href="indexLogged.php">Mero <span>Notes</span></h1></a>
<div class="menu">
<a class=""href="indexLogged.php" ><i class="fa-sharp fa-solid fa-house"></i>  Home</a>
  <a href=""><i class="fa-solid fa-book"></i> Notes</a>
<a href="profilePage.php" style="width:113px"> <i class="fa-solid fa-user"></i> Account</a>
<a href="logout.php"><i class="fa-solid fa-right-to-bracket"></i> Logout</a>
<a href=""><i class="fa-solid fa-circle-info"></i> About</a>
  
</div>
  
  <button class="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </button>
  
</div>
<nav class="mobileNav">
  
  
  <a href="indexLogged.php" class="is-active">Home</a>
  <a href="">Notes</a>
  <a href="profilePage.php">Account</a>
  <a href="logout.php">Logout</a>
  <a href="">About</a>
</nav>
</nav>

 



<div class="formContainer">
 <span style="color:red;">*</span><span style="color:green; font-weight:500;">Complete Personal Details </span>
 <br><br>
    <div class="title"> <span id="lblGreetings"></span><span>, <?php echo $dataFetch['fullName'];?>.</span></div>
    <div class="content">
      <h2 style=" margin-top: 15px; font-size:16px; text-align:right;" ><button onclick="formEnable()">Edit</button></h2>
      <span id="RepMsg"></span>
      <fieldset id="myFieldset" disabled>
      <form id="myForm" method="POST" autocomplete="off">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Your name" value="<?php echo $dataFetch['fullName'] ?>" name="fullName"  required>
          </div>
          <div class="input-box">
            <span style="color:red;"class="details">Email</span>
            <input type="text" placeholder="Your Email" value="<?php echo $dataFetch['email'] ?>"  name="email" disabled  required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Your Address" value="<?php echo $dataFetch['address'] ?>" name="address"  required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Your number" value="<?php echo $dataFetch['phoneNum'] ?>" name="phoneNum"  required>
          </div>
          
      
          <div class="input-box">
            <span class="details">New Password</span>
            <input type="password" placeholder="Your New password" value="<?php echo $dataFetch[''] ?>" name="password"   required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Your Confirm password" value="<?php echo $dataFetch[''] ?>" name="conPassword"  required>
          </div>
        </div>
       
        <div class="button">
          <input class="btmBtn"type="submit" id="updateBtn" value="Update">
           <a class="btmBtn" href="">Cancel</a>
  </input>
        </div>
      </form>
      </fieldset>
    </div>
  </div>
  

</body>
<!--Greeting Script-->
<script>
var myDate = new Date();
var hrs = myDate.getHours();

var greet;

if (hrs < 12){
    greet = 'Good Morning';}
else if (hrs >= 12 && hrs <= 17){
    greet = 'Good Afternoon';}
else if (hrs >= 17 && hrs <= 24){
    greet = 'Good Evening';}

document.getElementById('lblGreetings').innerHTML = greet ;

function formEnable(){
document.getElementById("myFieldset").disabled = false;
}
</script> 
<!--Greeting Script-->

<!--Script-->

<script src="JS/app.js"></script>
<script type="text/javascript">
     $(document).ready(function(){
      $('#updateBtn').click(function(){
        event.preventDefault();
        $.ajax({
          url:"profileUpdate.php",
          type:"POST",
          data: $('#myForm').serialize(),
     success:function(response){
      if(response == 1){
            $('#RepMsg').fadeIn();
            $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:green; font-size:11px;"></i><span style="color:green; font-size:14px;"> Profile Updated Successfully.</span>');
          
          }if(response == 2){
            $('#RepMsg').fadeIn();
            $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i><span style="color:red; font-size:14px;"> Password must be 8 characters.</span>');
          
          }if(response==3){
          
            $('#RepMsg').fadeIn();
            $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i><span style="color:red; font-size:14px;"> Password and Confirm Password did not match.')
           
          };
          }
        });
       });
      });
    </script>



<!--Script-->
  </html>
<?php
}
?>