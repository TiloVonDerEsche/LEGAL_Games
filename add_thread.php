<?php
/**
 * Adds a thread to the database
 *
 * @param mysqli $conn            The active DB-Connection
 * @param string $thread_title    The title of the thread
 * @param string $thread_content  Content of the thread?
 * @param string $thread_author   Author
 * @return bool                   Did we succeed?
 */

 function addThread($conn, $thread_title, $thread_content, $thread_author) {
    $sql = "INSERT INTO threads (title, content, author, comment_count) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssi", $thread_title, $thread_content, $thread_author, 0);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
    return false;
}

/*
include "db_connect.php";
$threadTitle = $_GET["threadTitle"];
$threadAuthor = $_GET["threadAuthor"];
$threadContent = $_GET["threadContent"];


echo "<h2>Trying to add a new Thread with the title: $threadTitle <br><hr>
Content: $threadContent <br>
Author: $threadAuthor </h2>";
$sql = "INSERT INTO threads (title, content, author, comment_count)
  VALUES ('$threadTitle', '$threadContent', '$threadAuthor', 0)";
$result = $conn->query($sql) or die(mysqli_error());

include "search_all_threads.php";*/
?>
