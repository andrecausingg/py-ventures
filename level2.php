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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/background/Logo.png" type="image/x-icon">
    <script src="javascript/level2.js" defer></script>
    <link rel="stylesheet" href="css/level1.css">
    <link rel="stylesheet" href="css/animations.css">
    <title>Level 2 | Py-venture</title>
</head>
<body onbeforeunload="return unloading()">
     <!-- Portrait Notification (Alert) -->
     <div class="portrait-notification">
        <div class="cp"></div>
        Please Rotate Your Screen To Landscape
    </div>
    
     <!-- Loader Wrapper -->
    <div class="loader-wrapper" id="loader-wrapper">
        <!-- loader-container -->
       <div class="loader-container" id="loader-container">
           <div class="arvi-container">
               <div class="arvi-item-container">
                   <div class="arvi-cover"></div>
                   <img src="images/characters/arvi/avi 1.png" alt="Arvi" class="arvi-loader">
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

    <!-- Wrapper -->
    <div class="wrapper">
        <div class="lecture-container" id="lecture-container">
            <div class="script-container">
                <div class="script" id="script">
                    <i class="fa fa-arrow-left left-btn" id="left-btn" aria-hidden="true"></i>  
                    <div class="script-txt" id="script-txt">

                    </div>
                    <i class="fa fa-arrow-right right-btn" id="right-btn" aria-hidden="true"></i> 
                </div>
            </div>
            <div class="characters-container">
                <img src="images/characters/arvi/avi1-script.png" alt="Arvi" class="characters" id="arvi1-convo">
                <div class="proceed-container">
                    <div class="start-btn" id="start-btn">Start</div>
                </div>
                <img src="images/characters/arvi/scientist 1.png" alt="Scientist" class="characters charTalking" id="scientist-convo">
            </div>
        </div>
            <div class="battle-div">                
                <nav>    
                    <div class="instruction-board" id="instuction-board">
                        <img src="images/map-resources/instruction.png" alt="" class="board-image">
                    </div>
                    <div class="timer-container" id="timer-container"></div>
                    <div class="nav-content-container">
                        <img src="images/map-resources/setting-icon.png" class="map-btn" id="setting-btn" alt="">
                        <img src="images/map-resources/back.png" alt="" class="map-btn" id="back">
                    </div>
                </nav>
    
                <div class="battle-field">
                    <div class="arvi-position">
                        <div class="arvi-life-container" id="arvi-life-container"><p class="arvi-health-text"></p><div class="arvi-life" id="arvi-life"></div></div>
                        <img src="images/characters/arvi/avi 1.png" alt="" class="arvi movement" id="arvi">
                    </div>
                    <div class="enemy-position">
                        <div class="enemy-life-container" id="enemy-life-container"><p class="enemy-health-text"></p><div class="enemy-life" id="enemy-life"></div></div>
                        <img src="images/characters/enemies/malware.png" alt="" class="enemy movement" id="enemy">
                    </div>
                </div>
            </div>
    
            <div class="question-div">
                <div class="background">
                    <div class="challenge-div">
                        <div class="f-question" id="f-question">
                            <p class="instruct" id="instruct"></p>
                            <p class="question-para" id="question-para"></p>
                        </div>
                        <div class="question-btn-container" id="question-btn-container">
                            <div class="option1" id="option1"></div>
                            <div class="option2" id="option2"></div>
                            <div class="option3" id="option3"></div>
                        </div>
                    </div>
        
                    <div class="answer-btn-div">
                        <div class="reset" id="reset">RESET</div>
                        <div class="submit" id="submit">SUBMIT</div>
                    </div>
        
                    <div class="result-div">
                        <div class="f-question-answer">
                            <p class="question-para-answer" id="correct"></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Win Modal -->
            <div class="game-over-modal">
                <div class="win-container">
                    <form action="map.html">  <!--    Temporary       -->
                        <input type="submit"  class="ok-btn" id="ok-btn" value="OK">
                    </form>
                </div>  

                <div class="lose-container">
                    <div class="title-container">
                        <h1 class="try-again">Try Again</h1>
                    </div>
                    <div class="lose-btn-container">
                        <button id="try-yes-btn">Yes</button>
                        <button id="try-no-btn">No</button>
                    </div> 
                </div>   
            </div>
    </div>

    <!-- Ready Modal -->
    <div class="ready-modal" id="ready-modal">
        <div class="ready-container" id="ready-container">
            <h1 class="ready">READY</h1>
            <div class="count" id="count">3</div>
        </div>
    </div>

    <!-- Attack Modal -->
    <div class="arvi-attack-modal" id="arvi-attack-modal">
        <div class="attack">
            <h1 class="result" id="result">
                <span class="attack-span bounce">C</span>
                <span class="attack-span bounce">O</span>
                <span class="attack-span bounce">R</span>
                <span class="attack-span bounce">R</span>
                <span class="attack-span bounce">E</span>
                <span class="attack-span bounce">C</span>
                <span class="attack-span bounce">T</span>
            </h1>
            <img src="images/characters/arvi/arvi-attack.png" alt="" class="beforeAttack" id="before-A-image">
        </div>
    </div>

    <div class="enemy-attack-modal" id="enemy-attack-modal">
        <div class="enemy-attack">
            <h1 class="enemy-result" id="enemy-result">
                <span class="enemy-attack-span bounce">W</span>
                <span class="enemy-attack-span bounce">R</span>
                <span class="enemy-attack-span bounce">O</span>
                <span class="enemy-attack-span bounce">N</span>
                <span class="enemy-attack-span bounce">G</span>
            </h1>
            <img src="images/characters/enemies/malware-attack.png" alt="" class="beforeAttack" id="enemy-A-image">
        </div>
    </div>

    <!-- Exit Modal -->
    <div class="exit-modal" id="exit-modal">
        <div class="exit-container">
            <div class="question">ARE YOU SURE YOU WANT TO EXIT?</div>
            <div class="buttons">
                <a href="menu.html" class="yes">YES</a>
                <div class="no" id="no">NO</div>
            </div>       
        </div>
    </div>

    <!-- Setting Modal -->
    <div class="setting-modal" id="setting-modal">
        <div class="setting-container">
            <div class="cross-container" id="close"><h1 class="cross">+</h1></div>
            <div class="bgm-container">
                <label for="slider">BGM</label>
                <div class="slidecontainer">
                    <input type="range" min="1" max="100" value="20" class="slider" id="myRange">
                </div>
            </div>
            <div class="sfx-container">
                <label for="slider">SFX</label>
                <div class="slidecontainer">
                    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                </div>
            </div>
            <a href="log-in.html" class="log-out">LOG OUT</a>
        </div>
    </div>

    <!-- Instruction Modal -->
    <div class="instruction-modal">
        <div class="info-container">
            
        </div>
    </div>

</body>
</html>
