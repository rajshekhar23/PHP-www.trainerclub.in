<?php
    session_start();
    if(isset($_SESSION["user_role"])) {
        session_unset();
        session_destroy();    
    }
?>