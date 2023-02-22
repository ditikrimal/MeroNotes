<?php 
session_start(); 
include('includes/header.php');
       include('includes/navbar.php');
     

       ?>
          <?php
          $_SESSION['message']="";
           if(isset($_POST['updateBtn'])){
$conn = mysqli_connect('localhost', 'root','',  'meronotesdatabase') or die("Cannot Connect Database".$connection->error);
$brandName=$_POST['brandName'];

$location=$_POST['location'];

$contactNumber=$_POST['contactNumber'];
$contactMail=$_POST['contactMail'];
$footerAbout=$_POST['footerAbout'];


$query="UPDATE `footercontent` SET `brandName`='$brandName',`location`='$location',
`contactNumber`='$contactNumber',`contactMail`='$contactMail',`footerAbout`='$footerAbout'";
 $result=mysqli_query($conn,$query);

 if($result){
 $_SESSION['message']="Footer Updated Successfully.";

 }else{
    $_SESSION['message']="Could Not Update Footer. Server Error";
 }
};
    ?>
          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

<ul>
       

            <!-- Nav Item - User Information -->
            <li  class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small" >Mero Notes ADMIN</span>
                    <img class="img-profile rounded-circle"
                        src="img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <?php 
  $conn = mysqli_connect('localhost', 'root','',  'meronotesdatabase') or die("Cannot Connect Database".$connection->error);

  $query="SELECT * FROM  footerContent";
  $query_run =mysqli_query($conn, $query);
  $retrieve=mysqli_fetch_assoc($query_run);

  
  ?>
   
   

<h4 id="successMSG" style="color:black; font-size:22px;font-weight:800; background-color:lightblue;padding:6px;text-align:center;text-transform:uppercase;">
<?php 
echo $_SESSION['message'];
?></h4>
<script type="text/javascript">
    window.onload = function()
    {
        timedHide(document.getElementById('successMSG'), 10);
    }

    function timedHide(element, seconds)
    {
        if (element) {
            setTimeout(function() {
                element.style.display = 'none';
            }, seconds*500);
        }
    }
</script>
<form action="footerEdit.php" enctype="multipart/form-data" method="POST" >

<div class="modal-body mx-3">
<div class="md-form mt-3">
  <label data-error="wrong" data-success="right" for="brandName">Brand Name</label>
    <input value="<?php echo $retrieve['brandName'] ?>"  name="brandName" type="text" id="brandName"  style="color:black;" class="form-control validate">

  </div>
  <div class="md-form mt-3">
  <label data-error="wrong" data-success="right" for="location">Location</label>
    <input value="<?php echo $retrieve['location'] ?>"    name="location" type="text" id="location"  style="color:black;" class="form-control validate">

  </div>
  <div class="md-form mt-3">
  <label data-error="wrong" data-success="right" for="contactNumber">Contact Number</label>
    <input value="<?php echo $retrieve['contactNumber'] ?>"    name="contactNumber" type="text" id="contactNumber"  style="color:black;" class="form-control validate">

  </div>

  <div class="md-form mt-3">
  <label data-error="wrong" data-success="right" for="contactMail">Contact Mail</label>
    <input value="<?php echo $retrieve['contactMail']?>"  name="contactMail" type="text" id="contactMail"  style="color:black;" class="form-control validate">
    
  </div>
  <div class="md-form mt-3">
  <label data-error="wrong" data-success="right" for="footerAbout">Footer About</label>
    <input value="<?php echo $retrieve['footerAbout'] ?>"   name="footerAbout" type="text" id="footerAbout"  style="color:black;" class="form-control validate">
    
  </div>
 

</div>
<div class="modal-footer d-flex justify-content-center">
  <button class="btn btn-primary" name="updateBtn" id="updateBtn" type="submit">Update</button>
  <a href="notes.php" class="btn btn-danger">Cancel</a>
</div>
</div>
</div>
</div>

</form>

</div>
<!-- End of Main Content -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>