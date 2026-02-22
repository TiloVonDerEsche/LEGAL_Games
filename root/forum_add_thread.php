<?php
include("header.php");
?>


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
</div>

<!----------------------------------------------------------
-					  Forum-Threads				
----------------------------------------------------------->
<div class="main">

<div class="writeCommentField">
        <div class="addCommentField">
            <form action="add_thread.php">          <!--Bei Submit öffne add_comment.php-->
            <br> <label> Enter your title here: </label> <br> <!--Comment goes here-->
            <input type="text" name="threadTitle"><br> 
        </div>

        <div class="addCommentAuthor">
            <br> <label> Enter content here: </label> <br> <!-- Name of the author here -->
            <input type="text" name="threadContent"><br> 
        </div>

        <div class="addCommentAuthor">
            <br> <label> Enter the date here: </label> <br> <!-- Name of the author here -->
            <input type="date" name="threadDate"><br> 
        </div>
    
        <div class="addCommentAuthor">
            <br> <label> Enter your username here: </label> <br> <!-- Name of the author here -->
            <input type="text" name="threadAuthor"><br> 
        </div>
        
        <div class="submitCommentButton">
            <input type="submit" value="Submit">  <!--Der Submit Button, der die Anfrage abschickt-->
            </form>
        </div>
    </div>
</div>


<?php
include("footer.php");
?>
