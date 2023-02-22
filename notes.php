<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<html lang="en">
<head>
    <style>
  
   
      </style>
     
</head>

<body>
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
    <link rel="stylesheet" href="CSS/notes.scss">

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

 <title>Mero Notes</title>

<?php
session_start();
if  ($_SESSION['loggedIn'] != true){

  ?>
    <nav>
    <div class="container">
    
      <h1><a href="">Mero <span>Notes</span></a></h1>
    <div class="menu">
      <a class=""href="indexLogged.php" ><i class="fa-sharp fa-solid fa-house"></i>  Home</a>
      <a href="notes.php"><i class="fa-solid fa-book"></i> Notes</a>
      <a href="indexLogged.php"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
      <a class="outToggle" href="#"><i class="fa-solid fa-user-plus"></i> Signup</a>
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
    <a href="">Notes</a>
    <a href="">Login</a>
    <a class="outToggle" href="#">Signup</a>
  
    <a href="">About</a>
  </nav>
   </nav>
   <script src="JS/app.js"></script>
   <?php
}else{
?>
 <nav>
  <div class="container">
  
    <h1><a href="indexLogged.php">Mero <span>Notes</span></h1></a>
  <div class="menu">
  <a class=""href="indexLogged.php" ><i class="fa-sharp fa-solid fa-house"></i>  Home</a>
    <a href=""><i class="fa-solid fa-book"></i> Notes</a>
<a style="width:116px" href="profilePage.php"> <i class="fa-solid fa-user" ></i> Account</a>
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
  
  
  <a href="indexLogged.php" >Home</a>
  <a href="">Notes</a>
  <a href="">Account</a>
  <a href="logout.php">Logout</a>
  <a href="">About</a>
</nav>
 </nav>

 <script src="JS/app.js"></script>
<?php
};
?>
   <script src="JS/app.js"></script>