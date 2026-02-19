<?php
include "db_connect.php";  
$comment_content = $_GET["commentContent"]; 
$comment_author = $_GET["commentAuthor"];    
$comment_date = $_GET["commentDate"];     


	echo "<h2>Trying to add a new Comment: $comment_content => $comment_author </h2>";
	$sql = "INSERT INTO thread1 (CommentID, C_content, C_author, C_date) VALUES ('NULL', '$comment_content', '$comment_author', '$comment_date')"; 
  	$result = $conn->query($sql) or die(mysqli_error());  
  
	  include "search_all_comments.php"; 
  ?>

  <a href="forum.php">Return to LEGAL_News</a>  

