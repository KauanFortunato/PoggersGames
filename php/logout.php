<?php
    include_once('../php/test-login.php');
    //unset($_SESSION['email']);
    //unset($_SESSION['senha']);
    //print_r($_SESSION);
    session_destroy();
    header("Location: ../main_templates/index.php");
?>