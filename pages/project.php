<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">

    <!-- PAGE TITLE -->
    <title>Canvas - Game</title>

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

    <canvas class="canvas" height="300" width="300" style="background-color: #e0f8cf"></canvas>
    <h1 class="score"></h1>

    <!--Black = #071821
    Dark Green = #306850
    Light Green = #86c06c
    Lime = #e0f8cf-->

</div>

<!-- FOOTER -->
<footer>
    <div class="global-footnote">
        <a href="..\pages\index.php" class="scroll-up">Back to Top</a>
        <i>~ Ben Madelin ~</i>
    </div>
</footer>

</body>

<?php
$url = basename($_SERVER['REQUEST_URI']);

if ((strpos($url, 'project.php') !== false) && (isset($_GET['selected']))) {
    $selectedProject = $_GET['selected'];

    $projectDir = '..\content\\' . $selectedProject;
    $scriptFiles = glob($projectDir . '/*.js');

    //sortDependencies
    $dependencies = 'draw.js';
    $index = array_search($dependencies, $scriptFiles);
    $shift = count($scriptFiles) - $index;

    $dependencyValue =  $scriptFiles[$index];
    $swapValue = $scriptFiles[count($scriptFiles)-1];

    $scriptFiles[$index] = $swapValue;
    $scriptFiles[count($scriptFiles)-1] = $dependencyValue;

    //formatScriptElements
    foreach($scriptFiles as $file) {
        echo $file;

        echo '<script type="text/javascript" src="' . $file . '"></script>';
    }





    echo '';

} else {
    echo '<div class="game-section"><h2>NO DATA AVAILABLE FOR SELECTED TITLE</h2></div>';
}
?>

<!--<script type="text/javascript" src="..\scripts\snake\fruit.js"></script>
<script type="text/javascript" src="..\scripts\snake\snake.js"></script>
<script type="text/javascript" src="..\scripts\snake\draw.js"></script>-->

</html>