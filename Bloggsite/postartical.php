<?php
include 'dbh.php';
?>
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bodystyle.css">
</head>
<body>

<div class="container">
	<div class="row">
    <div class="col-xl-12">
		<div class="form_main">
                <h1 class="heading" align="center" style="color:blue;"><strong>CleverSign</strong></h1>
                <div class="form">
                <form action="insert_article.php" method="post" id="contactFrm" name="insert_article_db">
                    <input type="text" required="" placeholder="Please enter your Blog title" value="" name="title_name" class="txt">
                     <textarea rows="20" cols="100%" required="" placeholder="Write your article" name="article_content" type="text" class="txt_3"></textarea>
                    <input type="text" required="" placeholder="Please enter author name" value="" name="author_name" class="txt">
        

                     <input  type="submit" value="submit" name="submit" class="btn btn-primary">
                </form>
            </div>
            </div>
            </div
	</div>
</div>
</body>