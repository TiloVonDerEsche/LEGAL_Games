<?php
    include("header.php");
?>

<!----------------------------------------------------------
-			       Forum-Thread-Look						
----------------------------------------------------------->
<link rel="stylesheet" href="src/stylesheets/forum.css">                 <!-- Externe CSS zum stylen des Forums und seiner Threads-->

<div class="top-bar">
    <h1>
        LEGAL_Data
    </h1>
</div>

<div class="main">
      
    <form action="search.php" method="get">         <!--Das Feld zur Eingabe eines Schlüsselwortes, dass beim drücken der Entertaste search_keyword.php ausführt--> 
        <br><label>Enter a Keyword to search for:</label><br>
            <input type="text" name="keyword"><br>     <!--Eingabefeld 0-->
    </form>

    <br>
    <hr> <!-- a horizontal black line -->
    <br>

    <?php

    include "db_connect.php";
    $keywordfromform = $_GET["keyword"]; //Das keyword wird comment.php aus dem Eingabefeld zur Suchbegriffeingabe entnommen und einer Variable zugewiesen.
                                        //$keywordfromform wird unten zum Durchsuchen der Datenbanksuchanfrage-Ergebnisse genutzt

    echo "<h2>Show all comments with the word: $keywordfromform </h2>";

    $sql = "SELECT * FROM comments WHERE content LIKE '%$keywordfromform%' "; 
    $result = $conn->query($sql);                                                                                    
                                                                                                                    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        echo "id " .$row["id"]. ": \"" . $row["content"]. "\", by: " . $row["author"]. " ".$row["timestmp"]."<br>"; 
        }                                                                                                                    
    } else { 
        echo "No comments with that keyword found!<br>";                                                                                                                        
        echo "0 results";
                      
    }
    ?>

</div>
<?php
$conn->close();       
include("footer.php");             
?>
    
