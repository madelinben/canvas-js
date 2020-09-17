    <!DOCTYPE html>
    <html lang="en-US">

    <head>
        <meta charset="UTF-8">

        <!-- PAGE TITLE -->
        <title>Canvas - Home</title>

        <!-- SITE META DATA -->
        <meta name="keywords" content="CANVAS, CODING CHALLENGE, GAME, WEB DEVELOPMENT, HTML, CSS, JAVASCRIPT">
        <meta name="description" content="A Collection of re-imagined games turned Challenges to practice Web Development.">
        <meta name="author" content="Ben Madelin">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- SITE RESOURCES -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/png" href="..\img\favicon.png">

        <!-- PAGE STYLING -->
        <link rel="stylesheet" type="text/css" href="..\style\style.css">
        <link rel="stylesheet" type="text/css" href="..\style\tile.css">

    </head>

    <body>

    <!-- HEADER -->
    <header>
        <div class="global-navbar">
            <a href="..\pages\index.php" class="site-link"><h1>CANVAS CODING CHALLENGES</h1></a>
        </div>
    </header>

    <!-- CONTENT -->
    <div class="content-container">

        <!-- TILE -->
        <div class="tile-gallery">

            <?php
            $path = "../content/";
            $dirList = glob($path . '*', GLOB_ONLYDIR);

            foreach($dirList as $i) {
                $projectName = str_replace($path, "", $i);

                echo '<a href="..\pages\project.php?selected=' . $projectName . '" class="tile-container">' .
                    '<img src="..\img\\' . $projectName . '.png" class="tile-image" alt="' . ucfirst($projectName) . '" style="width:320px;height:320px">' .
                '<div class="tile-overlay">
                    <div class="tile-content">' . ucfirst($projectName) . '</div>
                </div>
            </a>';
            } ?>



        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="global-footnote">
        <a href="..\pages\index.php" class="scroll-up">Back to Top</a>
        <i>~ Ben Madelin ~</i>
        </div>
    </footer>



    </body>

    </html>