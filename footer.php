<?php 
  $conn = mysqli_connect('localhost', 'root','',  'meronotesdatabase') or die("Cannot Connect Database".$connection->error);

  $query="SELECT * FROM  footerContent";
  $query_run =mysqli_query($conn, $query);
  $retrieve=mysqli_fetch_assoc($query_run);

  
  ?>
<footer class="footer-distributed">

<div class="footer-left">
    <h3><?php echo strtok($retrieve['brandName'], " ") ?><span> <?php echo strstr($retrieve['brandName']," "); ?></span></h3>

   
    <p class="footer-company-name">Copyright © 2022 <strong>Mero Notes</strong> All rights reserved</p>
</div>

   
<div class="footer-center">
    <div>
        <i class="fa fa-map-marker"></i>
        <p><?php echo $retrieve['location']?></p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+977 <?php echo $retrieve['contactNumber']?></p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="meronotes@gmail.com"><?php echo $retrieve['contactMail']?> </a></p>
    </div>
</div>
<div class="footer-right">
    <p class="footer-company-about">
        <span>About the company</span>
      <?php echo $retrieve['footerAbout']?>
    </p>
    <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
    </div>
</div>

</footer>

<div class="dev">
<hr>
Website by : <strong><a href=""> Ditik Rimal</a></strong>
  </div>
<style>
    



.footer-distributed {
  background-color: #3b3c3c;
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 50px;

}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right {
  display: inline-block;
  vertical-align: top;
}
.footerName::last-word{
  color: red;
}
/* Footer left */

.footer-distributed .footer-left {
  width: 30%;
  margin-top: 30px;
  text-transform: uppercase;
  text-align: center;
  font-size: 30px;
}

.footer-distributed h3 {
  color: #ffffff;
  margin: 0;
}

.footer-distributed h3 span {
  color: var(--primary);
}

/* Footer links */

.footer-distributed .footer-links {
  color: #ffffff;
  margin: 20px 0 12px;
}

.footer-distributed .footer-links a {
  display: inline-block;
  line-height: 1.8;
  text-decoration: none;
  color: inherit;
}

.footer-distributed .footer-company-name {
  color: black;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center {
  width: 35%;
}

.footer-distributed .footer-center i {
  background-color: #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope {
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p {
  display: inline-block;
  color: #ffffff;
  vertical-align: middle;
  margin: 0;
}

.footer-distributed .footer-center p span {
  display: block;
  font-weight: normal;
  font-size: 14px;
  line-height: 2;
}

.footer-distributed .footer-center p a {
  color: var(--primary);
  text-decoration: none;
}

/* Footer Right */

.footer-distributed .footer-right {
  width: 30%;
}

.footer-distributed .footer-company-about {
  line-height: 20px;
  color: #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span {
  display: block;
  color: #ffffff;
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons {
  margin-top: 25px;
  text-align: center;
  
}

.footer-distributed .footer-icons a {
  display: inline-block;

  width: 45px;
  height: 45px;
  cursor: pointer;
  background-color: #33383b;
  border-radius: 2px;
  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;
  padding-top: 11.7px;
  margin-right: 3px;
  margin-bottom: 5px;
  border-radius:50%;
  transition:0.4s;
}

.footer-distributed .footer-icons a:hover {
  background-color: #3f71ea;
}

.footer-links a:hover {
  color: #3f71ea;
}
@import url("https://fonts.googleapis.com/css2?family=Caveat&display=swap");
.dev {

  font-weight: 300;
 text-align:center;
 font-size:15px;
padding-top:8px;
padding-bottom:9px;
bottom:0;
  background-color: #3B3C3C;
}
.dev hr{
  background-color: grey;
  border:none;
  height:2px;
  margin-bottom:10px
}
.dev a {
  padding-right:20px;
  font-weight: 500;
  text-decoration: underline;
  color: black;
  transition: 0.7s;
}
.dev a:hover {
  color: lightblue;

}

@media (max-width: 880px) {
  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right {
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }
  .footer-distributed .footer-center i {
    margin-left: 0;
  }
}
@media (max-width: 380px) {
  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right {
    font-size: 20px;
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }
  p {
    font-size: 12px;
  }
}
@media (min-height: 800px) {
  .footer-distributed {
    position: relative;
  }
}

</style>