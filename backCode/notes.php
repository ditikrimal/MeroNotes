<?php
session_start();

$ret_data='';
$user_id=$_SESSION['user_id'];
if($_SESSION['loggedIn']!=true ){
  header('Location: /demosite3fnl/index.php');  


  
}
 
else{
   ?>
   <html>
   <head>
    <style>
    body{
     font-family: "Poppins", sans-serif;
     font-size: 14px;
     font-weight: 400;
     color: #1e1e27;
     background-color: wheat;
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
    <script src="https://kit.fontawesome.com/eac1eb5eeb.js" crossorigin="anonymous"></script>
    <title>Mero Notes</title>
    <link rel="stylesheet" href="mainstyle.css">
  
    


   


</head>
    <body>
        
  <nav>
   <div class="logo"><a href="indexLogged.php"><h1>Mero <span> Notes</span></h1></div></a>
   <ul class="navBar"> 
    <li><a href="indexLogged.php">Home</a></li>
     <li><a href="notes.php">Notes</a></li>
   </ul>
  </nav>
<div class="content">
    </body>
   </html>
<?php }?>