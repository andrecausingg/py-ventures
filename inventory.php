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
    <script src="javascript/inventory.js" defer></script>
    <link rel="shortcut icon" href="images/background/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/inventory.css">
    <link rel="stylesheet" href="css/animations.css">
    <title>Inventory</title>
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
                    <img src="images/loader/avi-2.png" alt="" class="loadingMovement arvi-loader">
                    <div class="arvi-text" id="arvi-text">Now Loading...</div>
                </div>
                <div class="progress-container">
                    <div class="progress-bar"></div>
                </div>
            </div>
        </div>

        <!-- Container -->
        <div class="container">
            <div class="arvi-div">
                <div class="map-btn-container">
                    <a href="map" class="map-btn" id="map-btn" onclick="buttonClick()">MAP</a>
                </div>
                <div class="arvi-img-div">
                    <img src="images/characters/arvi/avi 1.png" alt="" class="arvi movement" id="arvi">
                </div>
            </div>
            <div class="inventory-div">
                <div class="inventory-container">
                    <div class="header-container">INVENTORY</div>
                    <div class="item-container">
                        <div class="item item1 equipped" id="power-up1" onclick="buttonClick()"></div>
                        <div class="item item2" id="power-up2" onclick="buttonClick()" ></div>
                        <div class="item item3" id="power-up3" onclick="buttonClick()"></div>
                        <div class="item item4" id="power-up4" onclick="buttonClick()"></div>
                        <div class="item item5" id="power-up5" onclick="buttonClick()"></div>
                        <div class="item item6" id="power-up6" onclick="buttonClick()"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="power-up-info-modal" id="power-up-info-modal">
            <div class="power-up-info">
                <div class="image-container"><img src="" alt="" class="power-up-image" id="power-up-image"></div>
                <div class="power-up-name" id="power-up-name"></div>
                <div class="power-up-description" id="power-up-description"></div>
                <div class="btn-container">
                    <div class="eqiup btn" id="equip">Equip</div>
                    <div class="cancel btn" id="cancel">Cancel</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
