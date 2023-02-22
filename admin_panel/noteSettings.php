<?php
 error_reporting (E_ALL ^ E_NOTICE); 
 session_start();
        $conn = mysqli_connect('localhost', 'root','',  'meronotesdatabase') or die("Cannot Connect Database".$connection->error);
    
           
            if(isset($_POST['addBtn'])){
                $noteTitle=$_POST['noteTitle'];
                $noteCategory=$_POST['noteCategory'];
                $noteSubject=$_POST['noteSubject'];
                $noteDescription=$_POST['noteDescription'];
                $imgFile=$_FILES['noteCoverImage'];
                $fileName=$imgFile['name'];
                $filetmp=$imgFile['tmp_name'];
    
                $destinationfile='uploadedImages/'.$fileName;
               
                move_uploaded_file($filetmp,$destinationfile);
                $query="INSERT INTO `notespage`(`noteTitle`, `noteCategory`, `noteSubject`, `noteCoverImage`, `noteDescription`)
                 VALUES ('$noteTitle','$noteCategory','$noteSubject','$destinationfile','$noteDescription')";
                 $result=mysqli_query($conn,$query);
            
                 if($result){
                 $_SESSION['message']="Note Uploaded Successfully.";
                 header('Location: notes.php');
                 }else{
                    $_SESSION['message']="Could Not Upload Note. Server Error";
                 }
                }
                if(isset($_POST['deleteBtn'])){
                    $deleteID=$_POST['deleteID'];
                    $deleteQuery="DELETE FROM `notespage` WHERE noteID='$deleteID' ";
                    $deleteQuery_run=mysqli_query($conn,$deleteQuery);
                    if($deleteQuery){
                        $_SESSION['message']="Note Deleted Successfully";
                        header('Location: notes.php');
                    }else{
                        $_SESSION['message']="Could Not Delete Note. Server Error";
                    }
                }
                if(isset($_POST['updateBtn'])){
                    $editID=$_SESSION['sesID'];
                    if(isset($_FILES['editNoteCoverImage'])){
                        $conn = mysqli_connect('localhost', 'root','',  'meronotesdatabase') or die("Cannot Connect Database".$connection->error);
                        $transID=$_POST['trasnID'];
                        $_SESSION['sesID']=$transID;
                        $query="SELECT noteCoverImage FROM  notespage where noteID=$editID";
                        $query_run =mysqli_query($conn, $query);
                        $retrieve=mysqli_fetch_assoc($query_run);
                        $oldFile=$retrieve['noteCoverImage'];
                        unlink($oldFile,);
                        $editImgFile=$_FILES['editNoteCoverImage'];
                        $editName=$editImgFile['name'];
                        $editFiletmp=$editImgFile['tmp_name'];
                        $editDestinationfile='uploadedImages/'.$editName;
                        move_uploaded_file($editFiletmp,$editDestinationfile);
                        $imgquery="UPDATE `notespage` SET `noteCoverImage`='$editDestinationfile' WHERE noteID='$editID'";
                         $imgresult=mysqli_query($conn,$imgquery);
                    }

                    $editNoteTitle=$_POST['editNoteTitle'];

                    $editNoteCategory=$_POST['editNoteCategory'];

                    $editNoteSubject=$_POST['editNoteSubject'];

                    $editNoteDescription=$_POST['editNoteDescription'];

                 
                    $query="UPDATE `notespage` SET `noteID`='$editID',`noteTitle`='$editNoteTitle',`noteCategory`='$editNoteCategory',
                    `noteSubject`='$editNoteSubject',`noteDescription`='$editNoteDescription' WHERE noteID='$editID'";
                     $result=mysqli_query($conn,$query);
                    
                     if($result){
                     $_SESSION['message']="Note Updated Successfully.";
                     header('Location: notes.php');
                     }else{
                        $_SESSION['message']="Could Not Update Note. Server Error";
                     }
                    }
       ?>

