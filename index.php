<?php
    // Get root
    $ROOT = $_SERVER['DOCUMENT_ROOT'] . "/ICPP";

    // Get ICPP class
    require_once "$ROOT/classes/ICPP.php";

    // Redirect to home
    ICPP::gotoHome();
?>