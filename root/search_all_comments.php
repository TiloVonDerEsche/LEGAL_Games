<!--search_all_comments sendet eine SQL Anfrage an die Datenbank, die alle Kommentare ausgibt(siehe Z.8). -->
<?php
//Fall ein Connection Error auftritt schreibe "Connection failed: " + den Fehlertypen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM comments"; // -> Es wird die CommentID, der C_content, C_author und C_date ausgewählt
  $result = $conn->query($sql);                                        // und alle zutreffenden Ergebnisse(, indem Fall sind alle Kommentare zutreffen da es keine WHERE Bedingung gibt)



  // Falls es passende Daten in der Datenbank gibt gebe diese wie folgt nacheinander aus
  //Die while Schleife läuft solange bis result keine Treffer mehr hat, anders gesagt es gibt jede Spalte an Kommentaren aus bis es keine Spalte mehr gibt.
  //Falls Es vom Start aus keine Ergebnisse gibt, gibt das Programm den Schriftzug "0 results" aus.
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "CommentID: " . $row["id"]. " - Comment: " . $row["content"]. " " . $row["author"]. " ".$row["cdate"]."<br>";
    }
  } else {
    echo "0 results";
  }

  ?>
