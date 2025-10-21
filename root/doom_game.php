

<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>DOOM</title>
        <style type="text/css">
        .dosbox-container { width: 640px; height: 400px; margin: auto; margin-top: 15vmax;}
        .dosbox-container > .dosbox-overlay { background: url(https://js-dos.com/cdn/DOOM.png); }
        .FullscreenBtn {margin-left: 33vmax;}
        .startDOSboxHref {margin-top: 20vmax; margin-left: 45vmax;}
        

        </style>
    </head>
    <body>
        <div id="dosbox"></div>
        <br/>
        <button class="FullscreenBtn" onclick="dosbox.requestFullScreen();">Make fullscreen</button>
        
        <script type="text/javascript" src="https://js-dos.com/cdn/js-dos-api.js"></script>
        <script type="text/javascript">
            var dosbox = new Dosbox({
                id: "dosbox",
                onload: function (dosbox) {
                dosbox.run("D:\LEGAL_Games\root\src\games\Doom\Dosbox\Dosbox.exe", "D:\LEGAL_Games\root\src\games\Doom64\Doom64.exe");
                },
                onrun: function (dosbox, app) {
                console.log("App '" + app + "' is runned");
                }
            });
        </script>
            <div class="startDOSboxHref">
            <a href="D:\LEGAL_Games\root\src\games\Doom64\Doom64.exe">Start Dosbox</a>
            </div>


    </body>
</html>