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
        LEGAL_Ipsum
    </h1>
</div>

<!----------------------------------------------------------
-					  Troll
----------------------------------------------------------->
<div class="main">

    <?php
        chdir(__DIR__ . '/src/bin');
        $output = shell_exec('./generate_track_list.bin');
        echo "<pre>$output</pre>";
        //$output = shell_exec('./3d_track_visualizer.bin');
        //echo "<pre>$output</pre>";
    ?>
</div>

<?php
include("footer.php");
?>
