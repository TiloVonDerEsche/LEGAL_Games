<?php

include "db_connect.php";
$thread_id = $_GET["t_id"]; ;
$comment_content = $_GET["commentContent"];
$comment_author = $_GET["commentAuthor"];


echo "<h2>Trying to add a new Comment: $comment_content => $comment_author </h2>";
$sql = "INSERT INTO comments (thread_id, content, author)
 VALUES ('$thread_id', '$comment_content', '$comment_author')";
$result = $conn->query($sql) or die(mysqli_error());

include "search_all_comments.php";
?>

<a href="forum.php">Return to LEGAL_News</a>
