<!DOCTYPE html>
<html>
<head>
  <title>home page</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <br>
    <h1 class="text-white bg-dark text-center"> All Condidate</h1>
    <table class="table table-bordered table-script table-hover text-center">
      <thead>
        
      </thead>
      <tbody>
        <?php 

        include 'dbh.php';
              $displayquery="select * from memes";
              $querydisplay=mysqli_query($conn,$displayquery);
              while($result=mysqli_fetch_array($querydisplay)){
                ?>
                <tr>
                  <td><h1 class="text-center bg-bright text-dark"><?php echo $result['comment']?> </h1><br><img src="<?php echo $result['meme_file'];?>" height="100%" width="90%"></td>
                </tr>
                <?php
              }

        ?>
      </tbody>
    </table>

  </div>
</body>
</html>