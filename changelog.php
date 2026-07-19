<?php
include("header.php");
?>

<!----------------------------------------------------------
-					  Changelog						
----------------------------------------------------------->
<link rel="stylesheet" href="src/stylesheets/forum.css">                 <!-- Externe CSS zum stylen der Seite und ihrer Einträge-->

<div class="top-bar">
    <h1>
        LEGAL_Changelog
    </h1>
</div>

<div class="main">

    <div class="changelog-list">
        <ol>
            <li>It is now possible to write your own Threads 23.09.2021 </li>
            <li>Videos Page filled with content 23.09.2021 </li>
            <li>Changelog introduced 25.09.2021</li>
            <li>Readme and Changelog nav-option in the footer 25.09.2021</li>
            <li>Bug fix: "Change password?" hyperlink was partially black, while being on a forum related page 25.09.2021</li>
            <li>DOOM als Dummy in die game_list geschoben 25.09.2021</li>
            <li>Added Bomberman as a DosBox game 10.03.2026</li>
            <li>Added Nuklear Strike as a game and made the default one to display 02.04.2026</li>
        </ol>

        <br>
        <br>
        <p>ToDo: </p>
        <ol>
            <li> Make Banner invisible on mobile. -> Quick Fix to stop obstructing the NavBar </li>
            <li> When reloading add_comment.php the comment should not be posted a second time</li>
            <li>Sanitize the comment/thread content before putting it in the DB / on the page, to prevent users to DOS a thread by redirecting them on page content load. Replace IMG html hack with a proper way to post an image / gif by providing its url</li>
        </ol>
    </div>
</div>
    
<?php
include("footer.php");
?>

        
    
