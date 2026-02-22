<?php
include("header.php");
?>


    <style type="text/css">
    .dosbox-container { width: 640px; height: 400px; margin: auto; margin-top: 15vmax;}
    .dosbox-container > .dosbox-overlay { background: url("src/images/games/mrboom30.png"); }
    .FullscreenBtn {margin-left: 33vmax;}
    .startDOSboxHref {margin-top: 20vmax; margin-left: 45vmax;}


    </style>

    <div id="dosbox"></div>
    <br/>
    <button class="FullscreenBtn" onclick="dosbox.requestFullScreen();">Make fullscreen</button>

    <script type="text/javascript" src="https://js-dos.com/cdn/js-dos-api.js"></script>
    <script type="text/javascript">
        var dosbox = new Dosbox({
            id: "dosbox",
            onload: function (dosbox) {
            dosbox.run("src/games/MRBOOM30.zip", "MRBOOM30.EXE");
            },
            onrun: function (dosbox, app) {
            console.log("App '" + app + "' is runned");
            }
        });
    </script>

<?php
include("footer.php");
?>

