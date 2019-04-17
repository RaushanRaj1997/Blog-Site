 <?php
            include 'dbh.php';
            if(isset($_POST['submit']))
            {
              $comment=$_POST['comment'];
              $file=$_FILES['file'];
              $user=$_POST['user'];
             /* $_SESSION['meme_user']=$_POST['user'];*/
              /*print_r($username);
              echo "<br>";
              print_r($file);*/
              $filename=$file['name'];
              $filetem=$file['tmp_name'];
              $fileext=explode('.', $filename);
              $filecheck=strtolower(end($fileext));
              $fileextstored=array('png','jpg','jpeg');
              if(in_array($filecheck,$fileextstored)){
                $destinationfile='upload/'.$filename;
                move_uploaded_file($filetem,$destinationfile);
                $q="insert into memes(comment,meme_file,user,date) values('$comment','$destinationfile','$user', Now())";
              $query=mysqli_query($conn,$q);
              }
              header('location:view_meme.php');

            }
              