<form action="search_keyword.php">
  <br><label>Enter a Keyword to search for:</label><br>
  <input type="text" name="keyword"><br>
</form>

<hr> <!-- horizontal black line -->

<?php

include "db_connect.php";
$keywordfromform = $_GET["keyword"];


echo "<h2>Show all comments with the word: $keywordfromform </h2>";

$sql = "SELECT * FROM comments WHERE content LIKE '%$keywordfromform%' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "CommentID: " . $row["id"]. " - Comment: " . $row["content"]. " "
    .$row["c_author"]. " ".$row["timestmp"]."<br>";
  }
} else {
echo "0 results";
}
?>
