<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<html lang="en">
   <head>
      <style>
      </style>
   
  
      <!-- <Required Scripts> -->
      <div id="bgimg" ></div>
      <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
      <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script src="https://kit.fontawesome.com/eac1eb5eeb.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="CSS/index.scss">
      <script src="https://kit.fontawesome.com/eac1eb5eeb.js" crossorigin="anonymous" async></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
      <!--   <script src="https://apis.google.com/js/platform.js" async defer></script> 
         <script src="https://kit.fontawesome.com/eac1eb5eeb.js" crossorigin="anonymous" async></script>
         <meta name="google-signin-client_id" content="1054274045332-jq6do5nb5vqonl8jjvgo99933reaudpc.apps.googleusercontent.com">
         <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0&appId=580551203867735&autoLogAppEvents=1" nonce="sBAVTL5R"></script>
         -->
      <!-- </Required Scripts> -->
      </head>
     
        
      <title>Mero Notes</title>
      <body>
      <nav>
         <div class="container">
            <h1><a href="">Mero <span>Notes</span></a></h1>
            <div class="menu">
               <a class=""href="indexLogged.php" ><i class="fa-sharp fa-solid fa-house"></i>  Home</a>
               <a href="notes.php"><i class="fa-solid fa-book"></i> Notes</a>
               <a href="#"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
               <a  href="#"><i class="fa-solid fa-user-plus"></i> Signup</a>
               <a href=""><i class="fa-solid fa-circle-info"></i> About</a>
            </div>
            <button class="hamburger">
            <span></span>
            <span></span>
            <span></span>
            </button>
         </div>
         <nav class="mobileNav">
            <a href="indexLogged.php" >Home</a>
            <a href="#">Notes</a>
            <a href="#">Login</a>
            <a  href="#">Signup</a>
            <a href="">About</a>
         </nav>
      </nav>
      <main>
         <!--<script type="text/javascript" src="https://freehitcounters.org/count/bmth"></script><br>
            <a href='https://drweiglundpartner.de/'>https://DrWeiglundPartner.de</a> <script type='text/javascript' src='https://whomania.com/ctr?id=e34e2ac6e1054c2ec89364f73bc4e808fdcb074e'></script>
            --> 
         <div class="box">
            <div class="indexContent">
               <h1>Learn and <span> Earn with Us.</span> </h1>
               <h2>Keep up with the era of technology and help us to help you. Register now to start Earning and Learning with us.</h2>
            </div>
            <div class="inner-box">
               <div class="forms-wrap">
                  <form id="myForm1" method="POST" autocomplete="off" class="sign-in-form">
                     <div class="logo">
                        <h2>Mero <span>Notes</h2>
                     </div>
                     <div class="heading">
                        <h4>Login to Continue</h4>
                     </div>
                     <p id="RepMsg1"></p>
                     <div class="actual-form">
                        <div class="input-wrap">
                           <input 
                              type="email"
                              minlength="4"
                              class="input-field"
                              autocomplete="off" name="email"
                              required 
                              />
                           <label>Email</label>
                        </div>
                        <div class="input-wrap">
                           <input
                              type="password"
                              minlength="4"
                              class="input-field"
                              autocomplete="off" name="password"
                              required
                              />
                           <label>Password</label>
                        </div>
                        <p class="text">
                           <a href="#"> Forgot Password ?</a> 
                        </p>
                        <button class="loginButton" id="loginButton" name="loginButton">Log In</button>
                        <h6>Don't Have an Account ?</h6>
                        <a href="#" class="toggle">Sign up Here</a>
                        <div class="social">
                           <span>OR</span>
                           <br>
                           <div class="socialLinks">
                              <i class="fab fa-google"><a style="text-decoration: none; color: black;" href="https://mail.google.com/">  Google</a></i> 
                              <i class="fab fa-facebook"><a style="text-decoration: none; color: black;" href="https://www.facebook.com/login.php/">  Facebook</a></i>
                           </div>
                        </div>
                     </div>
                  </form>
                
                  <form id="myForm" action="" method="POST" autocomplete="off" class="sign-up-form">
                     <div class="logo">
                        <h2>Mero Notes</h2>
                     </div>
                     <div class="heading">
                        <h4>Get Started</h4>
                     </div>
                     <p id="RepMsg"></p>
                     <p id="validationSpan"></p>
                     <div class="actual-form">
                        <div class="input-wrap">
                           <input
                              type="text"
                              minlength="4"
                              class="input-field"
                              autocomplete="off"
                              name="fullName"
                              required
                              />
                           <label>Name</label>
                        </div>
                        <div class="input-wrap">
                           <input
                              type="email"
                              class="input-field"
                              autocomplete="off" name="email"
                              required
                              />
                           <label>Email</label>
                        </div>
                        <div class="input-wrap">
                           <input
                              type="password"
                              minlength="4"
                              class="input-field"
                              autocomplete="off"name="password" id="id_password" minlength="8"  
                              required 
                              />
                           <label>Password</label>
                        </div>
                        <div class="input-wrap">
                           <input
                              type="password"
                              class="input-field"
                              autocomplete="off"name="conPassword" id="id_conPassword" 
                              required minlength="8"
                              />
                           <label>Confirm Password</label>
                        </div>
                        <button name="submitBtn" type="submit" class="loginButton" id="regBtn" >Sign Up </button>
                        <h6>Already have an Account ?</h6>
                        <a href="#" class="toggle">Sign In Here</a>
                        <div class="social">
                           <span>OR</span>
                           <br>
                           <div class="socialLinks">
                              <i class="fab fa-google"><a style="text-decoration: none; color: black;" href="https://mail.google.com/">  Google</a></i> 
                              <i class="fab fa-facebook"><a style="text-decoration: none; color: black;" href="https://www.facebook.com/login.php/">  Facebook</a></i>
                           </div>
                        </div>
                     </div>
                  </form>
                  
               </div>
            </div>
         </div>
      </main>
      <section id="blog">
         <div class="blog-heading">
            <Span>Recent Notes</Span>
            <h3>My Blog</h3>
         </div>
         <div class="blog-container">
            <div class="blog-box">
               <div class="blog-img">
                  <img src="images/business-2.jpg" alt="">
               </div>
               <div class="blog-text">
                  <Span>Hello World</Span>
                  <a href="#" class="blog-title">Where are you now ?</a>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate corrupti unde nam, beatae, natus saepe omnis aliquid illum necessitatibus repellat placeat, similique architecto dolor? Dolorum fugit nesciunt quae dolor ab.</p>
                  <a href="">Read More</a>
               </div>
            </div>
            <div class="blog-box">
               <div class="blog-img">
                  <img src="images/business-2.jpg" alt="">
               </div>
               <div class="blog-text">
                  <Span>Hello World</Span>
                  <a href="#" class="blog-title">Where are you now ?</a>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate corrupti unde nam, beatae, natus saepe omnis aliquid illum necessitatibus repellat placeat, similique architecto dolor? Dolorum fugit nesciunt quae dolor ab.</p>
                  <a href="">Read More</a>
               </div>
            </div>
            <div class="blog-box">
               <div class="blog-img">
                  <img src="images/business-2.jpg" alt="">
               </div>
               <div class="blog-text">
                  <Span>Hello World</Span>
                  <a href="#" class="blog-title">Where are you now ?</a>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate corrupti unde nam, beatae, natus saepe omnis aliquid illum necessitatibus repellat placeat, similique architecto dolor? Dolorum fugit nesciunt quae dolor ab.</p>
                  <a href="">Read More</a>
               </div>
            </div>
            <div class="blog-box">
               <div class="blog-img">
                  <img src="images/business-2.jpg" alt="">
               </div>
               <div class="blog-text">
                  <Span>Hello World</Span>
                  <a href="#" class="blog-title">Where are you now ?</a>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate corrupti unde nam, beatae, natus saepe omnis aliquid illum necessitatibus repellat placeat, similique architecto dolor? Dolorum fugit nesciunt quae dolor ab.</p>
                  <a href="">Read More</a>
               </div>
            </div>
         </div>
         <hr>
      </section>
      <section class="profileSec">
         <div class="profileCard">
            <div class="profileCard-image">
               <img src="#" alt="Profile image">
            </div>
            <p class="name">Sanjok Pandey</p>
            <p>UX / UI developer</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur delectus, mollitia tenetur libero quam recusandae alias in incidunt.</p>
            <div class="socials">
               <button class="github"><i class="fab fa-github"></i></button>
               <button class="twitter"><i class="fab fa-twitter"></i></button>
               <button class="pinterest"><i class="fab fa-pinterest-p"></i></button>
            </div>
         </div>
         <div class="profileCard">
            <div class="profileCard-image">
               <img src="#" alt="Profile image">
            </div>
            <p class="name">Sujan Kunwar</p>
            <p>Front-End developer</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur delectus, mollitia tenetur libero quam recusandae alias in incidunt.</p>
            <div class="socials">
               <button class="github"><i class="fab fa-github"></i></button>
               <button class="pinterest"><i class="fab fa-pinterest-p"></i></button>
            </div>
         </div>
         <div class="profileCard">
            <div class="profileCard-image">
               <img src="Image/ditik_rimal" alt="Profile image">
            </div>
            <p class="name">Ditik Rimal</p>
            <p>Developer</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur delectus, mollitia tenetur libero quam recusandae alias in incidunt.</p>
            <div class="socials">
               <button class="github"><i class="fab fa-github"></i></button>
               <button class="twitter"><i class="fab fa-twitter"></i></button>
            </div>
         </div>
      </section>
      <?php
         include("footer.php");
         ?>
      <section id="otpVerify" class="otpSEC" >
         <div class="OTPbox">
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <form  id="otpForm" class="OTPForm">
               <div class="OTPheading">Mero <span>Notes</span></div>
               <div class="OTPcontent">
                  An OTP has been sent to your Email.
                  <p>Please check your<span style="color:red;"> inbox.</span></p>
               </div>
               <span id="RepMsg2"></span>
               <input name="otp" type="number" placeholder="OTP" maxlength="6" minlenght="6">
               <div class="Btns">
                  <button class="verifyBtn" id="verifyBtn" >Verify</button>
               </div>
               <div class="Btns">
              
                  <button onclick="otpTimer()"; class="resendBtn" id="resendBtn" value="resendOTP" >Resend OTP</button>
                 
               </div>
               <p id="otpTimer" style="font-weight:400"> Resend OTP in <span style="color:red;font-weight:700 !important;" id="countdowntimer">60 </span> Seconds</p>
            </form>
         </div>
      </section>
      <section id="doneSEC" class="doneSEC">
         <div class="doneBox">
            <h1>Congratulations </h1>
            <span>Your account has been created!</span>
            <div> <img src="Image/bg.svg" alt=""></div>
            <span>
            Check out features of Mero Notes to help you and others learn.
            </span>
            <h2>You wil be redirected shortly.</h2>
            <h3>OR</h3>
            <a href="">Proceed to Login</a>
         </div>
      </section>
      <!--Scripts -->
      <script src="JS/app.js">
        

      </script>
      <script>
         function otpTimer(){
            $('#otpTimer').css('visibility','visible');
         var timeleft = 60;
        
          var downloadTimer = setInterval(function(){
             timeleft--;
            
               document.getElementById("countdowntimer").textContent = timeleft;
           
               if(timeleft <= 0)
                   clearInterval(downloadTimer);
                      },1000);
                     } 
      </script>
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
                $('#RepMsg').html('<span style="color:green;">Sending OTP...<span>');
         
         },
         success:function(response){
          if(response == 6){
                $('#RepMsg').fadeIn();
                $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>Password Must be 8 characters.');
              
              }if(response == 1){
                $('#RepMsg').fadeIn();
                $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>This Email is already Taken.');
              
              }if(response==3){
               $('#id_password').css('border-bottom','solid 2px red');
               $('#id_conPassword').css('border-bottom','solid 2px red');
          
                $('#RepMsg').fadeIn();
                $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>Password and Confirm Password did not match.')
               
              }
              if(response==2){ 
                $('#bgimg').addClass("bgimg-active");
                $('#otpVerify').addClass('active');
              /* window.location.replace('verify.php');*/
              }if(response==0){
                $('#RepMsg').fadeIn();
                $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>Invalid Email.')
              }
              if(response==5){
                $('#RepMsg').fadeIn();
                $('#RepMsg').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>Empty Field.')
               
              }
              }
            });
           });
          });
      </script>
      <script type="text/javascript">
         $(document).ready(function(){
          $('#loginButton').click(function(){
            event.preventDefault();
            $.ajax({
              url:"registerLogin.php",
              type:"POST",
              data: $('#myForm1').serialize(),
             
         success:function(response){
          if(response == 1){
                $('#RepMsg1').fadeIn();
                $('#RepMsg1').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>This Email is not verified Yet.');
              exit;
            }if(response==2){
                $('#RepMsg1').fadeIn();
                $('#RepMsg1').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>Invalid Email or Password.');
                exit
             }else{
               <?php 
               $_SESSION['loggedIn']=true;
               $_SESSION['user_id']=$_POST['email'];  
               ?>
               window.location.replace('indexLogged.php');
              }
              }
              });
            })
          });
          
      </script>
      <script type="text/javascript">
         $(document).ready(function(){
          $('#verifyBtn').click(function(){
            event.preventDefault();
                $.ajax({
                  url:"otpVerify.php",
                  type:"POST",
                  data: $('#otpForm').serialize(), 
                  beforeSend: function(){
                    $('#RepMsg2').fadeIn();
                    $('#RepMsg2').html('<span style="color:green;">Validating OTP...<span>');
         
            },
                 
             success:function(response){
              if(response == 1){
                $('#RepMsg2').fadeIn();
                $('#RepMsg2').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>Invalid OTP.');
                
              }if(response == 7){
                $('#RepMsg2').fadeIn();
                $('#RepMsg2').html('<i class="fa-solid fa-triangle-exclamation" style="color:red; font-size:11px;"></i>Email has been verified through Link. <span style="color:black !important;">Redirecting in few Seconds.</span>');
                setTimeout(function() {
                  window.location.replace('index.php');
                            }, 5000);
              };
              if(response ==2 ){ 
                $('#doneSEC').addClass('active');
                $('#otpVeriyf').removeClass('active');
                setTimeout(function() {
                  window.location.replace('index.php');
                            }, 6000);
              };
             
            }
            });
          });
         });
            
      </script>
      <script type=text/javascript>
         /*
         let btn = document.getElementById("resendBtn");
         
         btn.addEventListener("click", () => {
         
           let btnValue = btn.value;
         
           $.post('resendOTP.php', {
               btnValue: btnValue
               
           }, (response) => {
             
         
               if(response == 2){
              $('#RepMsg2').fadeIn();
              $('#RepMsg2').html('<i class="fa-solid fa-triangle-exclamation" style="color:green; font-size:11px;"></i>OTP sent again.');
              exit;
            }if(response == 0){ 
              $('#RepMsg2').fadeIn();
              $('#RepMsg2').html('<i class="fa-solid fa-triangle-exclamation" style="color:green; font-size:11px;"></i>OTP sending Failed.');
              exit;
            }
           });
         });*/
          $(document).ready(function(){
            
         $('#resendBtn').click(function(){
          $("#resendBtn").attr("disabled", true);
          $('#resendBtn').addClass('unavailable');
          event.preventDefault();
              $.ajax({
                url:"resendOTP.php",
                type:"POST",
                data:("hashString= 1"),
               
           success:function(response){
            if(response == 2){
              $('#RepMsg2').fadeIn();
              $('#RepMsg2').html('<span style="color:green;"><i class="fa-solid fa-triangle-exclamation" style="color:green; font-size:11px;"></i>OTP sent again.</span>');
             
            }if(response == 0){ 
              $('#RepMsg2').fadeIn();
              $('#RepMsg2').html('<i class="fa-solid fa-triangle-exclamation" style="color:green; font-size:11px;"></i>OTP sending Failed.');
             
            }
           
            setTimeout(function() {
              $('#resendBtn').removeClass('unavailable');
                          }, 48000);
                       
          
            setTimeout(function() {
                $("#resendBtn").attr("disabled", false);
                          }, 48000);
                  
         
          }
          });
          
         });
         
         });
         
         
      </script>
      <!--Scripts -->
   </body>