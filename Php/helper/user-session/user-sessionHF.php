<?php
    class classUserSession{
        function userSession(){
            require_once("./Php/main/loginMF.php");

            if(isset($_SESSION["uat_id"])){
                $uat_id = $_SESSION["uat_id"];
                return $uat_id;
            }
        }
    }
?>