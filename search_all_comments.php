<?php

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "SELECT * FROM comments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "CommentID: " . $row["id"]. " - Comment: " . $row["content"]. " "
    .$row["author"]. " ".$row["timestmp"]."<br>";
  }
} else {
  echo "0 results";
}

?>
