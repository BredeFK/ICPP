<?php

    // Get root
    $ROOT = $_SERVER['DOCUMENT_ROOT'] . "/ICPP";


    class ICPP{

        public static function gotoHome() {
            header("Location: view");
            exit();
        }
    }
?>