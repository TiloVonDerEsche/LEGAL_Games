<?php
include("header.php");
include "db_connect.php";
?>


<!----------------------------------------------------->
-					  Forum-Thread
------------------------------------------------------->
<link rel="stylesheet" href="src/stylesheets/forum.css">

<div class="top-bar">
    <h1>
        LEGAL_News
    </h1>
</div>

<div class="main">
      <div class="writeCommentField">
          <form action="add_comment.php" method="get">
          <input type="hidden" name="t_id" value="<?php echo $_GET['t_id']; ?>">

          <div class="addCommentField">
              <br> <label> Enter your comment here: </label> <br>
              <input type="text" name="commentContent"><br>
          </div>

          <div class="addCommentAuthor">
              <br> <label> Enter your username here: </label> <br>
              <input type="text" name="commentAuthor"><br>
          </div>

          <div class="submitCommentButton">
              <input type="submit" value="Submit">
          </div>
          </form>
      </div>



    <div class="comments">
        <?php

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $t_id = $_GET['t_id'];

        $sql = "SELECT c.content, c.author, c.timestmp FROM comments AS c WHERE thread_id=$t_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            //queries 4 times the same data
            while($row = $result->fetch_assoc()) {
            echo '
                <div class="comment">
                    <div class="top-comment">
                        <p class="user">
                            '. $row["author"].'
                        </p>
                        <p class="comment-ts">
                            '. $row["timestmp"].'
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
include("footer.php");
?>
