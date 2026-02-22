 <!----------------------------------------------------------
-					  Forum-Thread
----------------------------------------------------------->
<link rel="stylesheet" href="src/stylesheets/forum.css">                 <!-- Externe CSS zum stylen des Forums und seiner Threads-->

<div class="top-bar">
    <h1>
        LEGAL_News
    </h1>
</div>

<div class="main">

    <!-- header fehlt noch in php -->



    <?php
    include "db_connect.php"    //Das Datenbank-Verbindungsskript wird importiert
    ?>
      <div class="writeCommentField">
          <form action="add_comment.php">          <!--Bei Submit öffne add_comment.php-->
          <input type="hidden" name="t_id" value="<?php echo $_GET['t_id']; ?>">

          <div class="addCommentField">
              <br> <label> Enter your comment here: </label> <br> <!--Comment goes here-->
              <input type="text" name="commentContent"><br>
          </div>

          <div class="addCommentAuthor">
              <br> <label> Enter your username here: </label> <br> <!-- Name of the author here -->
              <input type="text" name="commentAuthor"><br>
          </div>

          <div class="addCommentDate">
              <br> <label> Enter the date (YYYY-MM-DD): </label> <br>
              <input type="date" name="commentDate"><br>
          </div>

          <div class="submitCommentButton">
              <input type="submit" value="Submit">  <!--Der Submit Button, der die Anfrage abschickt-->
          </div>
          </form>
      </div>



    <div class="comments">
        <?php

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $t_id = $_GET['t_id'];
        $sql = "SELECT c.content, c.author, c.cdate FROM threads AS t, comments AS c WHERE thread_id=$t_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo '
                <div class="comment">
                    <div class="top-comment">
                        <p class="user">
                            '. $row["author"].'
                        </p>
                        <p class="comment-ts">
                            '. $row["cdate"].'
                        </p>
                    </div>
                    <div class="comment-content">
                        '. $row["content"].'
                    </div>
                </div>
            ';
            }
        } else {
            echo "0 results";
        }
        ?>
</div>
<?php
$conn->close();
?>
