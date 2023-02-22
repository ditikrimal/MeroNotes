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

    <?php 
  $conn = mysqli_connect('localhost', 'root','',  'meronotesdatabase') or die("Cannot Connect Database".$connection->error);
  $transID=$_POST['trasnID'];
  $_SESSION['sesID']=$transID;
  $query="SELECT * FROM  notespage where noteID=$transID";
  $query_run =mysqli_query($conn, $query);
  $retrieve=mysqli_fetch_assoc($query_run);

  
  ?>
  
<form action="noteSettings.php" enctype="multipart/form-data" method="POST" >

      <div class="modal-body mx-3">
      <div class="md-form mt-3">
        <label data-error="wrong" data-success="right" for="noteTitle">Note ID</label>
          <input disabled value="<?php echo $retrieve['noteID'];?>" name="editNoteID" type="text" id="noteTitle"  style="color:black;" class="form-control validate">
     
        </div>
        <div class="md-form mt-3">
        <label data-error="wrong" data-success="right" for="noteTitle">Note Title</label>
          <input  value="<?php echo $retrieve['noteTitle'];?>" name="editNoteTitle" type="text" id="noteTitle"  style="color:black;" class="form-control validate">
     
        </div>

        <div class="md-form mt-3">
        <label data-error="wrong" data-success="right" for="editNoteCategory">Note Category</label>
          <select value="<?php echo $retrieve['noteCategory'];  ?>" name="editNoteCategory"  style="color:black;"  id="noteCategory" class="form-control validate">
            <option <?=$retrieve['noteCategory'] == 'BBA' ? ' selected="selected"' : '';?> > BBA</option>
            <option <?=$retrieve['noteCategory'] == 'BCA' ? ' selected="selected"' : '';?> >BCA</option>
            <option <?=$retrieve['noteCategory'] == 'BHM' ? ' selected="selected"' : '';?> >BHM</option>
            <option <?=$retrieve['noteCategory'] == 'Cs.IT' ? ' selected="selected"' : '';?> >Cs.IT</option>
            <option <?=$retrieve['noteCategory'] == 'Bsc.N' ? ' selected="selected"' : '';?> >Bsc.N</option>
            <option <?=$retrieve['noteCategory'] == 'BHM' ? ' selected="selected"' : '';?> >BHM</option>
            <option <?=$retrieve['noteCategory'] == 'Grade 12' ? ' selected="selected"' : '';?> >Grade 12</option>
            <option <?=$retrieve['noteCategory'] == 'Grade 11' ? ' selected="selected"' : '';?> >Grade 11</option>
            <option <?=$retrieve['noteCategory'] == 'Grade 10' ? ' selected="selected"' : '';?> >Grade 10</option>
            <option <?=$retrieve['noteCategory'] == 'Grade 9' ? ' selected="selected"' : '';?> >Grade 9</option>
</select>
         
        </div>

        <div class="md-form mt-3">
        <label data-error="wrong" data-success="right" for="noteSubject">Subject</label>
          <input value=" <?php echo $retrieve['noteSubject']; ?> " name="editNoteSubject" type="text" id="noteSubject"  style="color:black;" class="form-control validate">
          
        </div>
        <div class="md-form mt-3">
        <img style="height:150px"src=" <?php echo $retrieve['noteCoverImage']; ?> " alt="">
        <label data-error="wrong" data-success="right" for="noteImg">Change Cover Image</label>
          <input  name="editNoteCoverImage" type="file" id="noteImg" style="color:black;"rows="4">
          
        </div>

        <div class="md-form mt-3">
        <label data-error="wrong" data-success="right" for="noteDes">Note Description</label>
          <textarea  name="editNoteDescription" type="LongText" id="noteDes"  style="color:black;" class="md-textarea form-control" rows="4"><?php echo $retrieve['noteDescription'];?></textarea>
          
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



  <script>
    var form = document.getElementById("myForm");
function handleForm(event) { event.preventDefault(); } 
form.addEventListener('submit', handleForm);

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
  width: 80vw;
  height: 80vh;
  background-size: contain;
  background-repeat: no-repeat no-repeat;
  background-position: center center;

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