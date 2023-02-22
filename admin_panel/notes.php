<?php 
session_start(); 
include('includes/header.php');
       include('includes/navbar.php');
     

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
    <!-- End of Topbar -->

   
    <!-- /.container-fluid -->
<div class="table">
    
<button type="button" style="float:right;margin:60px 10px 30px "class="btn btn-success" data-toggle="modal" data-target="#modalContactForm">Add Note</button>
<!-- Modal -->
<form action="noteSettings.php" enctype="multipart/form-data" method="POST" >
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add a Note</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mt-3">
        <label data-error="wrong" data-success="right" for="noteTitle">Note Title</label>
          <input name="noteTitle" type="text" id="noteTitle"  style="color:black;" class="form-control validate">
     
        </div>

        <div class="md-form mt-3">
        <label data-error="wrong" data-success="right" for="noteCategory">Note Category</label>
          <select name="noteCategory"  style="color:black;"  id="noteCategory" class="form-control validate">
            <option>BBA</option>
            <option>BCA</option>
            <option>BHM</option>
            <option>Cs.IT</option>
            <option>Bsc.N</option>
            <option>BHM</option>
            <option>Grade 12</option>
            <option>Grade 11</option>
            <option>Grade 10</option>
            <option>Grade 9</option>
</select>
         
        </div>

        <div class="md-form mt-3">
        <label data-error="wrong" data-success="right" for="noteSubject">Subject</label>
          <input name="noteSubject" type="text" id="noteSubject"  style="color:black;" class="form-control validate">
          
        </div>
        <div class="md-form mt-3">
        <label data-error="wrong" data-success="right" for="noteImg">Note Cover Image</label>
          <input name="noteCoverImage" type="file" id="noteImg" style="color:black;"rows="4"></input>
          
        </div>

        <div class="md-form mt-3">
        <label data-error="wrong" data-success="right" for="noteDes">Note Description</label>
          <textarea name="noteDescription" type="LongText" id="noteDes"  style="color:black;" class="md-textarea form-control" rows="4"></textarea>
          
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" name="addBtn" id="addBtn" type="submit">Add</button>
      </div>
    </div>
  </div>
</div>

</form>
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
<table style="overflow:scroll;"class="table table-bordered" id="dataTable" width="80%" cellspacing="0">

    <thead style="color:black;">
        <tr>
            <th>Note ID</th>
            <th>Note Title</th>
            <th>Note Category</th>
            <th>Note Subject</th>
            <th>Note Description</th>
            <th>Note Cover Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
  <tbody>
<?php 
  $conn = mysqli_connect('localhost', 'root','',  'meronotesdatabase') or die("Cannot Connect Database".$connection->error);
  $query="SELECT * FROM  notespage";
  $query_run =mysqli_query($conn, $query);
  if(mysqli_num_rows($query_run) >0 ){
    while($retrieve=mysqli_fetch_assoc($query_run)){
      ?>
      <tr>
        <td><?php echo $retrieve['noteID'];?> </td>
        <td><?php echo $retrieve['noteTitle'];?> </td>
        <td ><?php echo $retrieve['noteCategory'];?> </td>
        <td ><?php echo $retrieve['noteSubject'];?> </td>
        <td style="width:43%"><div style="overflow-y:scroll;height:auto;"><?php echo $retrieve['noteDescription'];?> </td>
        <td><div class="gallery"><img style="height:67px;"src="<?php echo $retrieve['noteCoverImage'];?>" alt="Cover Image"></div> <div id="fullpage"
         onclick="this.style.display='none';"></div></td>
        <td> 
        <form action="notesEdit.php" method="POST">
          <input type="hidden" value="<?php echo $retrieve['noteID']?>" name="trasnID">
          <button name="editBtn" type="submit" class="btn btn-primary">Edit</button>
        </form>
       
      </td>
        <td>
          <form action="noteSettings.php" method="POST">
          <input type="hidden" value="<?php echo $retrieve['noteID']?>" name="deleteID">
          <button name="deleteBtn" type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
      </tr>
    <?php
    }

  }
  ?>
  <script>
    function getPics() {} //just for this demo
const imgs = document.querySelectorAll('.gallery img');
const fullPage = document.querySelector('#fullpage');

imgs.forEach(img => {
  img.addEventListener('click', function() {
    fullPage.style.backgroundImage = 'url(' + img.src + ')';
    fullPage.style.display = 'block';
  });
});
  </script>
  <style>
    #fullpage {
  display: none;
  position: absolute;
  z-index: 9999;
  top: 0;
  left: 0;
  width: 58vw;
  height: 58vh;
  background-size: contain;
  background-repeat: no-repeat no-repeat;
  background-position: center center;
  background-color: black;
}
@media (max-width:60em) {
  table{
    overflow:scroll;
  }
  
}

  </style>
  </tbody>
</table>
</div>
</div>
<!-- End of Main Content -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>