<?php
include 'dbh.php';

 $a_title=$_POST['title_name'];
 $a_content=$_POST['article_content'];
 $a_author=$_POST['author_name'];
  $qy="insert into article(a_title,a_text,a_author,a_date) values('$a_title',' $a_content','$a_author',Now())";
  mysqli_query($conn,$qy);
  header('location:view_article.php');

 ?>
