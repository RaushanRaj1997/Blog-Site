<?php
  session_start();
  session_destroy();
?>

<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <link rel="stylesheet" type="text/css" href="regisstyle.css">
      <title></title>
</head>
<body>
   
    <div class="container">
       <div class="row">
             <div class="col-sm-6">
                    <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="img/logo.jpg" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="validation.php" method="POST" autocomplete="off">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" name="user_email" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" class="form-control" name="user_pass" placeholder="Password" required autocomplete="off">
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <a href="new_user.php" class="Sign_up">
                Sign up?
            </a>
        </div><!-- /card-container -->
             </div>
            
       </div>
      
    </div><!-- /container -->
</body>
</html>
