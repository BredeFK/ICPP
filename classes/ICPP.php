<?php

// Get root
$ROOT = $_SERVER['DOCUMENT_ROOT'] . "/ICPP";
require_once "$ROOT/vendor/autoload.php";
require_once "$ROOT/classes/DB.php";
require_once "$ROOT/classes/Users.php";
require_once "$ROOT/classes/Logs.php";
require_once "$ROOT/classes/Course.php";
require_once "$ROOT/classes/UserSubmission.php";


class ICPP
{

    // Set location to home
    public static function gotoHome()
    {
        header("Location: php");
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

    public static function requireTwig()
    {
        $ROOT = $_SERVER['DOCUMENT_ROOT'] . "/ICPP";
        $loader = new Twig_Loader_Filesystem("$ROOT/twig");
        return new Twig_Environment($loader, array(
            //    'cache' => './compilation_cache',
        ));
    }
}
