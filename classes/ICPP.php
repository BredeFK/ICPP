<?php

// Get root
$ROOT = $_SERVER['DOCUMENT_ROOT'] . "/ICPP";
require_once "$ROOT/classes/DB.php";
require_once "$ROOT/classes/Users.php";
require_once "$ROOT/classes/Logs.php";
require_once "$ROOT/classes/Course.php";


class ICPP
{

    // Set location to home
    public static function gotoHome()
    {
        header("Location: view");
        exit();
    }

    // Get db connection
    public static function requireDatabase()
    {
        $db = DB::getDBConnection();
        if (!$db) {
            Urge::gotoError(500, "No connection with the database");
        }
        return $db;
    }
}
