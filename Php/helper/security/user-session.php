<?php
    class classSecurity{
        function sessionSecurity(){
            require_once("./Php/main/loginMF.php");

            if(!isset($_SESSION["uat_id"])){
                echo "<script>window.location.href='404';</script>";
            }
        }   
    }
?>