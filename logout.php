<?php
    session_start();
    unset($_SESSION['uat_id']);
    session_unset();
    session_destroy();
    header('Refresh: 0;url=index');
    exit();
?>