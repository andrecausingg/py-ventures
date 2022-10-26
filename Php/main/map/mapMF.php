<?php
    class classMap{
        // private $clickLevel;

        // function __construct($clickLevel){
        //     $this->clickLevel = $clickLevel;
        // }

        function level1to5(){
            // File Path Connection Database
            require_once("./Php/helper/connectionHF.php");
            // File Path user Session
            require_once("./Php/helper/user-session/user-sessionHF.php");

            // Class
            $classDataBaseConnection = new classDataBaseConnection();
            $classUserSession = new classUserSession();

            // Variables
            $uat_id = $classUserSession->userSession();

            $check_level = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_map_level_progress_tbl WHERE umlpt_uat_id = '$uat_id'");
            while($row = mysqli_fetch_assoc($check_level)){
                $db_umlpt_level = $row["umlpt_level"];
                
                // Level 1
                if($db_umlpt_level >= 1){
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/blue-level-1.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/grey-level-1.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';  
                }

                // Level 2
                if($db_umlpt_level >= 2){
                    echo '
                        <div class="islandLink" id="lvl2"><img src="images/map-resources/levels/blue-level-2.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-2.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 3
                if($db_umlpt_level >= 3){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-3.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-3.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 4
                if($db_umlpt_level >= 4){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-4.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-4.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 5
                if($db_umlpt_level >= 5){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-5.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-5.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }
            // End of While    
            }
        }

        function level6to10(){
            // File Path Connection Database
            require_once("./Php/helper/connectionHF.php");
            // File Path user Session
            require_once("./Php/helper/user-session/user-sessionHF.php");

            // Class
            $classDataBaseConnection = new classDataBaseConnection();
            $classUserSession = new classUserSession();

            // Variables
            $uat_id = $classUserSession->userSession();

            $check_level = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_map_level_progress_tbl WHERE umlpt_uat_id = '$uat_id'");
            while($row = mysqli_fetch_assoc($check_level)){
                $db_umlpt_level = $row["umlpt_level"];

                // Level 6
                if($db_umlpt_level >= 6){
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/blue-level-6.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/grey-level-6.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 7
                if($db_umlpt_level >= 7){
                    echo '
                        <div class="islandLink" id="lvl2"><img src="images/map-resources/levels/blue-level-7.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-7.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 8
                if($db_umlpt_level >= 8){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-8.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-8.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 9
                if($db_umlpt_level >= 9){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-9.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-9.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 10
                if($db_umlpt_level >= 10){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-10.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-10.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }
            // End of While
            }
        }

        function level11to15(){
            // File Path Connection Database
            require_once("./Php/helper/connectionHF.php");
            // File Path user Session
            require_once("./Php/helper/user-session/user-sessionHF.php");

            // Class
            $classDataBaseConnection = new classDataBaseConnection();
            $classUserSession = new classUserSession();

            // Variables
            $uat_id = $classUserSession->userSession();

            $check_level = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_map_level_progress_tbl WHERE umlpt_uat_id = '$uat_id'");
            while($row = mysqli_fetch_assoc($check_level)){
                $db_umlpt_level = $row["umlpt_level"];

                // Level 11
                if($db_umlpt_level >= 11){
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/blue-level-11.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/grey-level-11.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 12
                if($db_umlpt_level >= 12){
                    echo '
                        <div class="islandLink" id="lvl2"><img src="images/map-resources/levels/blue-level-12.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-12.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 13
                if($db_umlpt_level >= 13){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-13.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-13.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 14
                if($db_umlpt_level >= 14){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-14.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-14.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 15
                if($db_umlpt_level >= 15){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-15.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-15.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }
            // End of While
            }
        }

        function level21to25(){
            // File Path Connection Database
            require_once("./Php/helper/connectionHF.php");
            // File Path user Session
            require_once("./Php/helper/user-session/user-sessionHF.php");

            // Class
            $classDataBaseConnection = new classDataBaseConnection();
            $classUserSession = new classUserSession();

            // Variables
            $uat_id = $classUserSession->userSession();

            $check_level = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_map_level_progress_tbl WHERE umlpt_uat_id = '$uat_id'");
            while($row = mysqli_fetch_assoc($check_level)){
                $db_umlpt_level = $row["umlpt_level"];

                // Level 21
                if($db_umlpt_level >= 21){
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/blue-level-21.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/grey-level-21.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 22
                if($db_umlpt_level >= 22){
                    echo '
                        <div class="islandLink" id="lvl2"><img src="images/map-resources/levels/blue-level-22.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-22.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 23
                if($db_umlpt_level >= 23){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-23.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-23.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 24
                if($db_umlpt_level >= 24){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-24.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-24.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 25
                if($db_umlpt_level >= 25){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-25.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-25.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }
            // End of While
            }
        }

        function level26to30(){
            // File Path Connection Database
            require_once("./Php/helper/connectionHF.php");
            // File Path user Session
            require_once("./Php/helper/user-session/user-sessionHF.php");

            // Class
            $classDataBaseConnection = new classDataBaseConnection();
            $classUserSession = new classUserSession();

            // Variables
            $uat_id = $classUserSession->userSession();

            $check_level = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_map_level_progress_tbl WHERE umlpt_uat_id = '$uat_id'");
            while($row = mysqli_fetch_assoc($check_level)){
                $db_umlpt_level = $row["umlpt_level"];

                // Level 26
                if($db_umlpt_level >= 26){
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/blue-level-26.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/grey-level-26.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 27
                if($db_umlpt_level >= 27){
                    echo '
                        <div class="islandLink" id="lvl2"><img src="images/map-resources/levels/blue-level-27.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-27.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 28
                if($db_umlpt_level >= 28){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-28.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-28.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 29
                if($db_umlpt_level >= 29){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-29.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-29.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 30
                if($db_umlpt_level >= 30){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-30.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-30.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }
            // End of While
            }
        }

        function level31to35(){
            // File Path Connection Database
            require_once("./Php/helper/connectionHF.php");
            // File Path user Session
            require_once("./Php/helper/user-session/user-sessionHF.php");

            // Class
            $classDataBaseConnection = new classDataBaseConnection();
            $classUserSession = new classUserSession();

            // Variables
            $uat_id = $classUserSession->userSession();

            $check_level = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_map_level_progress_tbl WHERE umlpt_uat_id = '$uat_id'");
            while($row = mysqli_fetch_assoc($check_level)){
                $db_umlpt_level = $row["umlpt_level"];

                // Level 31
                if($db_umlpt_level >= 31){
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/blue-level-31.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/grey-level-31.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 32
                if($db_umlpt_level >= 32){
                    echo '
                        <div class="islandLink" id="lvl2"><img src="images/map-resources/levels/blue-level-32.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-32.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 33
                if($db_umlpt_level >= 33){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-33.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-33.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 34
                if($db_umlpt_level >= 34){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-34.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-34.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 35
                if($db_umlpt_level >= 35){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-35.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-35.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }
            // End of While
            }
        }

        function level36to40(){
            // File Path Connection Database
            require_once("./Php/helper/connectionHF.php");
            // File Path user Session
            require_once("./Php/helper/user-session/user-sessionHF.php");

            // Class
            $classDataBaseConnection = new classDataBaseConnection();
            $classUserSession = new classUserSession();

            // Variables
            $uat_id = $classUserSession->userSession();

            $check_level = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_map_level_progress_tbl WHERE umlpt_uat_id = '$uat_id'");
            while($row = mysqli_fetch_assoc($check_level)){
                $db_umlpt_level = $row["umlpt_level"];

                // Level 36
                if($db_umlpt_level >= 36){
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/blue-level-36.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/grey-level-36.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 37
                if($db_umlpt_level >= 37){
                    echo '
                        <div class="islandLink" id="lvl2"><img src="images/map-resources/levels/blue-level-37.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-37.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 38
                if($db_umlpt_level >= 38){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-38.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-38.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 39
                if($db_umlpt_level >= 39){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-39.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-39.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 40
                if($db_umlpt_level >= 40){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-40.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-40.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }
            // End of While
            }
        }

        function level41to45(){
            // File Path Connection Database
            require_once("./Php/helper/connectionHF.php");
            // File Path user Session
            require_once("./Php/helper/user-session/user-sessionHF.php");

            // Class
            $classDataBaseConnection = new classDataBaseConnection();
            $classUserSession = new classUserSession();

            // Variables
            $uat_id = $classUserSession->userSession();

            $check_level = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_map_level_progress_tbl WHERE umlpt_uat_id = '$uat_id'");
            while($row = mysqli_fetch_assoc($check_level)){
                $db_umlpt_level = $row["umlpt_level"];

                // Level 41
                if($db_umlpt_level >= 41){
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/blue-level-41.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/grey-level-41.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 42
                if($db_umlpt_level >= 42){
                    echo '
                        <div class="islandLink" id="lvl2"><img src="images/map-resources/levels/blue-level-42.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-42.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 43
                if($db_umlpt_level >= 43){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-43.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-43.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 44
                if($db_umlpt_level >= 44){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-44.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-44.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 45
                if($db_umlpt_level >= 45){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-45.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-45.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }
            // End of While
            }
        }

        function level46to50(){
            // File Path Connection Database
            require_once("./Php/helper/connectionHF.php");
            // File Path user Session
            require_once("./Php/helper/user-session/user-sessionHF.php");

            // Class
            $classDataBaseConnection = new classDataBaseConnection();
            $classUserSession = new classUserSession();

            // Variables
            $uat_id = $classUserSession->userSession();

            $check_level = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_map_level_progress_tbl WHERE umlpt_uat_id = '$uat_id'");
            while($row = mysqli_fetch_assoc($check_level)){
                $db_umlpt_level = $row["umlpt_level"];

                // Level 46
                if($db_umlpt_level >= 46){
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/blue-level-46.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink" id="lvl1"><img src="images/map-resources/levels/grey-level-46.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 47
                if($db_umlpt_level >= 47){
                    echo '
                        <div class="islandLink" id="lvl2"><img src="images/map-resources/levels/blue-level-47.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-47.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 48
                if($db_umlpt_level >= 48){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-48.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-48.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 49
                if($db_umlpt_level >= 49){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-49.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-49.png" alt="" class="islands even-items" onclick="buttonClick()"></div>
                    ';
                }

                // Level 50
                if($db_umlpt_level >= 50){
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/blue-level-50.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }else{
                    echo '
                        <div class="islandLink"><img src="images/map-resources/levels/grey-level-50.png" alt="" class="islands odd-items" onclick="buttonClick()"></div>
                    ';
                }
            // End of While
            }
        }
    }
?>