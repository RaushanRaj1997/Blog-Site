
<?php
 include 'dbh.php';
 if(!($_SESSION['user']))
 {
  header("location:registration.php");
 }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CleverSign</title>
    <link rel="icon" type="image/jpg" href="img/icon.png"> 
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <link rel="stylesheet"  href="css/style.css">
    <link rel="stylesheet" href="css/animated.css">
    <!--footerstyling link-->
    <link rel="stylesheet" type="text/css" href="footer_style.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php">
        <div class="col-xs-3"><img src="img/adv.png" alt="Logo" width="30px">
        </div>
        <div class="col-xs-9"> CleverSign</div>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
       <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php"><i class="far fa-home"></i><?php echo $_SESSION['user'];?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VIEWSBLOG <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="view_meme.php">Memes</a></li>
             <li><a href="view_videos.php">Videos</a></li>
            <li><a href="view_article.php">Artical</a></li>
          </ul>S
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">POSTBLOG <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="postmeme.php">Memes</a></li>
            <li><a href="postvideos.php">Videos</a></li>
            <li><a href="postartical.php">artical</a></li>
          </ul>
        </li>

        <li><a href="account.html">Myaccount</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CONTACT US <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="">Address</a></li>
             <li><a href="map.html">MAP</a></li>
            <li><a href="https://www.facebook.com/profile.php?id=100013007918171" target="_blank">Facebook</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
   <div class="jumbotron">
     <div class="container">
      <div id="details" class="animated slideInLeft">
        <h1><strong>CleverSign</strong></h1>
        <p> this is the platform where you can enhence your skills</p>
      </div>       
     </div>
     <img src="img/top-image.jpg" alt="top-image">

   </div>
   <section>
     <div class="container">
       <div class="row">
         <div class="col-md-8">
         	<?php
         	  include 'index.php';
         	?>
         </div>
         <div class="col-md-4">
             <div class="widgets">
                <form action="search.php" method="POST">
                	 <input type="text" class="form-control"name='search' placeholder="Search for...">
                     <button type="submit" name='submit-search'>Go!</button>
                </form>
           </div><!---widgets closed-->
             <div class="widgets">
             <div class="popular">
                <h4>popular posts</h4>
                <div class="row">
                  <div class="col-xs-4"><img src="img/po.jpg" alt="Image 1">
                  </div>
                  <div class="col-xs-8 details">
                    <h4>this is the heading for post
                    </h4>
                    <p><i class="fas fa-clock"></i>10 november,2018</p>
                  </div>
                  <p>
                    of higher education, located in India. They are governed by the National Institutes of Technology Act, 2007, which declared them as institutions of national importance alongside Indian Institutes of Technology. These institutes of national importance receive special recognition from the Government of India. The NIT Council is the supreme governing body of India's National Institutes of Technology (NIT) system and all 31 NITs are funded by the Government of India. These institutes 
                  </p>
               </div>
               <div class="row">
                  <div class="col-xs-4"><img src="img/po.jpg" alt="Image 1">
                  </div>
                  <div class="col-xs-8 details">
                    <h4>this is the heading for post
                    </h4>
                    <p><i class="fas fa-clock"></i>10 november,2018</p>
                  </div>
                  <p>
                    of higher education, located in India. They are governed by the National Institutes of Technology Act, 2007, which declared them as institutions of national importance alongside Indian Institutes of Technology. These institutes of 
                  </p>
               </div>
              </div>
            </div>
         </div>
       </div>
     </div>
   </section>
   <section id="footer">
     <?php
     include 'footer.php';

     ?>
   </section>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    
  </body>
</html>