<?php
    require_once("./Php/helper/security/user-session.php");
    $classSecurity = new classSecurity();
    $classSecurity->sessionSecurity();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="javascript/map.js" defer></script>
    <script src="javascript/functions.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/background/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/map.css">
    <link rel="stylesheet" href="css/animations.css">
    <title>Map</title>
</head>
<body>
    <!-- Portrait Notification (Alert) -->
    <div class="portrait-notification">
        <div class="cp"></div>
        Please Rotate Your Screen To Landscape
    </div>

    <!-- Wrapper -->
   <div class="wrapper">

        <!-- Loader2 Wrapper -->
        <div class="loader2-wrapper" id="loader2-wrapper">
            <div class="loader-container2">
                <div class="arvi-container">
                    <img src="images/loader/avi-1.png" alt="" class="loadingMovement arvi">
                    <div class="arvi-text" id="arvi-text">Now Loading...</div>
                </div>
                <div class="progress-container">
                    <div class="progress-bar"></div>
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <nav id="navbar">
            <div class="inventory-btn-container">
                <a href ="inventory" class="inventory-btn" id="inventory-btn" onclick="buttonClick()">Inventory</a>
            </div>
            <div class="other-btn">
                <img src="images/map-resources/setting-icon.png" alt="" class="map-btn" id="setting-btn" onclick="buttonClick()">
                <img src="images/map-resources/back.png" alt="" class="map-btn" id="back" onclick="buttonClick()">
            </div>
        </nav>
        <i class="fa fa-arrow-left left-btn" aria-hidden="true"></i>


        <!-- Main Battle Elements -->
        <main id="main">
            <!-- Start of Level 1 to 5 -->
            <div class="map-page-w-main-island">
                <img src="images/map-resources/usa.png" alt="" class="main-island main-animation">
                <?php
                    require_once("./Php/main/map/mapMF.php");
                    $classMap = new classMap();
                    $classMap->level1to5();
                ?>
            </div> <!-- End of Level 1 to 5 -->

            <!-- Start Level 6 to 10 -->
            <div class="map-page-small-island">
                <?php
                    require_once("./Php/main/map/mapMF.php");
                    $classMap = new classMap();
                    $classMap->level6to10();
                ?>
            </div> <!-- End Level 6 to 10 -->

            <!-- Start of Level 11 to 15 -->
            <div class="map-page-w-main-island">
                <img src="images/map-resources/sweden.png" alt="" class="main-island main-animation">
                <?php
                    require_once("./Php/main/map/mapMF.php");
                    $classMap = new classMap();
                    $classMap->level11to15();
                ?>
            </div> <!-- End of Level 11 to 15 -->

            <!-- Start of Level 16 to 20-->
            <div class="map-page-small-island">
                <?php
                    require_once("./Php/main/map/mapMF.php");
                    $classMap = new classMap();
                    $classMap->level11to15();
                ?>
            </div> <!-- End of Level 16 to 20-->

            <!-- Start of level 21 to 25 -->
            <div class="map-page-w-main-island">
                <img src="images/map-resources/ph.png" alt="" class="main-island main-animation">
                <?php
                    require_once("./Php/main/map/mapMF.php");
                    $classMap = new classMap();
                    $classMap->level21to25();
                ?>
            </div> <!-- End of level 21 to 25 -->

            <!-- Start of level 26 to 30 -->
            <div class="map-page-small-island">
                <?php
                    require_once("./Php/main/map/mapMF.php");
                    $classMap = new classMap();
                    $classMap->level26to30();
                ?>
            </div> <!-- End of level 26 to 30 -->

            <!-- Start of level 31 to 35 -->
            <div class="map-page-w-main-island">
                <img src="images/map-resources/canada.png" alt="" class="main-island main-animation">
                <?php
                    require_once("./Php/main/map/mapMF.php");
                    $classMap = new classMap();
                    $classMap->level31to35();
                ?>
            </div> <!-- End of level 31 to 35 -->

            <!-- Start of level 36 to 40 -->
            <div class="map-page-small-island">
                <?php
                    require_once("./Php/main/map/mapMF.php");
                    $classMap = new classMap();
                    $classMap->level36to40();
                ?>
            </div> <!-- End of level 36 to 40 -->

            <!-- Start of level 41 to 45 -->
            <div class="map-page-w-main-island">
                <img src="images/map-resources/britain.png" alt="" class="main-island main-animation">
                <?php
                    require_once("./Php/main/map/mapMF.php");
                    $classMap = new classMap();
                    $classMap->level41to45();
                ?>
            </div> <!-- End of level 41 to 45 -->

            <!-- Start of level 46 to 50 -->
            <div class="map-page-small-island">
                <?php
                    require_once("./Php/main/map/mapMF.php");
                    $classMap = new classMap();
                    $classMap->level46to50();
                ?>
            </div> <!-- End of level 46 to 50 -->
        </main>
        
        <i class="fa fa-arrow-right right-btn" aria-hidden="true"></i>  
   </div>

    <div class="start-modal" id="start-modal">
        <div class="start-container">
            <div class="start-cross-container" id="start-close" onclick="buttonClick()"><h1 class="start-cross">+</h1></div>
            <div class="start-header">USA STAGE 1</div>
            <div class="info">
                START LEARNING PYTHON, ONE OF TODAY'S MOST IN DEMAND PROGRAMMING LANGUAGES. LET'S START OF
                BY PRINTING VARIOUS TEXTS
            </div>
            <div class="start-button">
                <a href="level1" class="start" id="startBtn" onclick="buttonClick()">Start</a>
            </div>       
        </div>
    </div>

   <!-- Exit Modal -->
   <div class="exit-modal" id="exit-modal">
    <div class="exit-container">
        <div class="question">ARE YOU SURE YOU WANT TO EXIT?</div>
        <div class="buttons">
            <a href="menu" class="yes" onclick="buttonClick()">YES</a>
            <div class="no" id="no" onclick="buttonClick()">NO</div>
        </div>       
    </div>
</div>

<!-- Setting Modal -->
<div class="setting-modal" id="setting-modal">
    <div class="setting-container">
        <div class="cross-container" id="close" onclick="buttonClick()"><h1 class="cross">+</h1></div>
        <div class="bgm-container">
            <label for="slider">BGM</label>
            <div class="slidecontainer">
                <input type="range" min="0" max="100" value="100" class="slider" id="bgVolume" onchange="bgVolumeAdjust()">
            </div>
        </div>
        <div class="sfx-container">
            <label for="slider">SFX</label>
            <div class="slidecontainer">
                <input type="range" min="0" max="100" value="100" class="slider" id="sfxVolume" onchange="sfxVolumeAdjust()">
            </div>
        </div>
        <a href="#" class="log-out" onclick="buttonClick()" id="log-out">LOG OUT</a>
    </div>
</div>
</body>
</html>
