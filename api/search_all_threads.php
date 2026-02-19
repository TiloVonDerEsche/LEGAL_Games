<!--search_all_comments sendet eine SQL Anfrage an die Datenbank, die alle Kommentare ausgibt(siehe Z.8). -->
<?php
//Fall ein Connection Error auftritt schreibe "Connection failed: " + den Fehlertypen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT * FROM forums";  
  $result = $conn->query($sql);                                       

 
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "ThreadID: " . $row["id"] . " - Title: " . $row["T_title"]. " Content: " . $row["T_content"]. " " . $row["T_author"]. " ".$row["T_date"]."<br>";
    }
  } else {
    echo "0 results";
  }
  
  ?>