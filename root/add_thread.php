<?php
include "db_connect.php";  
$threadTitle = $_GET["threadTitle"]; 
$threadAuthor = $_GET["threadAuthor"];  
$threadContent = $_GET["threadContent"]; 
$threadDate = $_GET["threadDate"];        


	echo "<h2>Trying to add a new Thread with the title: $threadTitle <br><hr> Content: $threadContent <br> Date: $threadDate <br> Author: $threadAuthor </h2>";
	$sql = "INSERT INTO threads (title, content, author, cdate, comment_count) VALUES ('$threadTitle', '$threadContent' , '$threadAuthor', '$threadDate',0)"; 
  	$result = $conn->query($sql) or die(mysqli_error());  
  
	  include "search_all_threads.php"; 
  ?>

  <a href="forum.php">Return to LEGAL_News</a>  

