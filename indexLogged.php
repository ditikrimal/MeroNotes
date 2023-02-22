
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
session_start();
if  ($_SESSION['loggedIn'] != true){
  header('Location: /demosite3fnl/index.php');
}else{
?>





<html lang="en">
<head>

</head>

<body>
  <!-- <Required Scripts> -->

  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/eac1eb5eeb.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>


     
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/demosite3fnl/CSS/indexLogged.scss">
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


  
  
 <nav>
  <div class="container">
  
    <h1><a href="indexLogged.php">Mero <span>Notes</span></h1></a>
  <div class="menu">
  <a class=""href="indexLogged.php" ><i class="fa-sharp fa-solid fa-house"></i>  Home</a>
    <a href="notes.php"><i class="fa-solid fa-book"></i> Notes</a>
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
  <a href="notes.php">Notes</a>
  <a href="profilePage.php">Account</a>
  <a href="logout.php">Logout</a>
  <a href="">About</a>
</nav>
 </nav>
 
<section class="course">
 <h1>Recent Notes</h1>
 
 <div class="grid">
      <div class="grid-item">
        <div class="card">  <div class="card-header">  <span>Note 1</span></div>
          <img class="card-img" src="./img/rome.jpg" alt="Rome" />
          <div class="card-content">
        
           
           <a href="">  <button class="card-btn">Learn More </button></a>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card"><div class="card-header"><span> Grade 10 - Science</span></div>
          <img
            class="card-img"
            src="./img/maxresdefault"
            alt="Grand Canyon"
          />
          <div class="card-content">
          
       
           <a href="">  <button class="card-btn">Learn More </button></a>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card"><div class="card-header">  <span>Note 3</span></div>
          <img class="card-img" src="./img/maldives.jpg" alt="Maldives" />
          <div class="card-content">
           
          
          <a href="">  <button class="card-btn">Learn More </button></a>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card"><div class="card-header">  <span>Note 4</span></div>
          <img
            class="card-img"
            src="./img/grand-canyon.jpg"
            alt="Grand Canyon"
          />
          <div class="card-content">
          
       
          <a href="">  <button class="card-btn">Learn More </button></a>
          </div>
        </div>
      </div>
    </div>
    <a class="seeAnch" href="notes.php">Show More</a>
    <hr>

</section>

<main>

      
<section class="indexContent">
<h1>Learn and <span> Earn with Us.</span> </h1>

<h2>Keep up with the era of technology and help us to help you. Start now to Earn and Learn with us.</h2>
</section>
<br>
<section class="indexContent2">
<h1>
How it works ?
</h1>
<h2>User can earn by uploading their notes of any subject or grade within the threshold of the notes required. Once the user uploads their notes, It is reviewd by Experts and then processed to Website.
According to the reach of the note uploaded payout is calculated and can be withdrawn through Mobile Wallet.
</h2>
</section>
<section class="wallets">
<img src="img/esewa-logo" alt="ESEWA">  <img src="img/pngfind.com-wallet-png-162996" alt="KHALTI">
</section>    

</main>
<hr class="spec">
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
            <img src="#" alt="Profile image">
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

  </body>
  <script src="JS/app.js"></script>
  <?php
}
?>
   