<?php
session_start();
if($_SESSION['loggedIn']!=true ){
  header('Location: /demosite3fnl/index.php');  


  
}
 
else{
    ?>
    <html><head>Hello World</head></html><?php
}
    ?>