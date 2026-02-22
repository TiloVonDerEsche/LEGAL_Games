<!--Die Variable html definiert die Threads im allgemeinen Html Format. Anschließend werde die spezifischen Daten des jeweiligen Threads aus Data.js entnommen und eingefügt(siehe Z.29, Z.31, Z.35, Z.38)
. Die Variablen dafür fangen mit einem $ Zeichen an.-->
<!----------------------------------------------------------
-					  Forum-Header
----------------------------------------------------------->

<link rel="stylesheet" href="src/stylesheets/forum.css">                 <!-- Externe CSS -->
<div class="top-bar">
    <h1>
        LEGAL_News
    </h1>
    <form method="get" action="forum_add_thread.php">
        <button class="postThreadBtn" type="submit">Post thread</button>
    </form>

</div>

<!----------------------------------------------------------
-					  Forum-Threads
----------------------------------------------------------->
<div class="main">


    <?php
        include 'db_connect.php';

        $sql = "SELECT * FROM threads";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { //Error nicht im Echo statement
            echo "
                <li class='forumRow'>
                    <div class='thread-itself'>
                        <a href='thread.php?t_id=".$row['id']."'>          
                            <h4 class='title'>
                                ". $row['title']."
                            </h4>
                            <p class='t-description'>
                                by ". $row['author']." ". $row['cdate']." ". $row['comment_count']."
                            </p>
                            <div class='thread-content'>
                               > ". $row['content']."
                            </div>
                        </a>
                    </div>
                </li>
            ";
            }
        } else {
            echo "0 results";

        }
    ?>
</div>
