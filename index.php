

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="javascript/app.js" defer></script>
    <link rel="shortcut icon" href="images/background/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Py-venture</title>
</head>
<body>

     <!-- Portrait Notification (Alert) -->
     <div class="portrait-notification">
        <div class="cp"></div>
        Please Rotate Your Screen To Landscape
    </div>
    
    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Loader Wrapper -->
        <div class="loader-wrapper" id="loader-wrapper">
             <!-- loader-container -->
            <div class="loader-container" id="loader-container">
                <div class="arvi-container">
                    <div class="arvi-item-container">
                        <div class="arvi-cover"></div>
                        <img src="images/characters/arvi/avi 1.png" alt="Arvi" class="arvi">
                    </div>
                    <button disabled class="percent-container" id="percent-container">0 <span class="percent-span">%</span></button>  
                </div>
                <div class="lower-container">
                    <div class="image-container">
                        <img src="images/loader/loader-image.PNG" alt="" class="lower-loader-image">
                    </div>
                    <div class="text-container">
                        <h6 class="tip-text">Tip</h6>
                        <h6 class="tip-text">You Can Choose From A Wide Selection Of Power Ups To Boost Avi</h6>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- Storyboard Wrapper -->
            <div class="storyboard-wrapper" id="storyboard">
                <!-- Background Container -->
                <div class="background-container">
                    <!-- Storyboard Container -->
                    <div class="storyboard-container">
                        <div class="item1">
                            <div class="image-holder1" id="image1"></div>
                            <div class="image-holder2" id="image2"></div>
                        </div>
                        <div class="item2">
                            <div class="image-holder3" id="image3"></div>
                        </div>
                        <div class="item3">
                            <div class="image-holder4" id="image4"></div>
                        </div>
                        <div class="item4">
                            <div class="image-holder5" id="image5"></div>
                        </div>
                        <div class="item5">
                            <div class="image-holder6" id="image6"></div>
                            <div class="image-holder7" id="image7"></div>
                        </div>
                    </div>
                </div>
                <!-- Continue Button -->
                <a href="login" class="continue-btn" id="continue-btn">CONTINUE</a>
           </div>     
                 
    </div>
    
</body>
</html>
