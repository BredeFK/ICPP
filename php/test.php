<?php

// Get root
$ROOT = $_SERVER['DOCUMENT_ROOT'] . "/ICPP";

// Get ICPP class
require_once "$ROOT/classes/ICPP.php";
require_once "$ROOT/classes/Users.php";

$db = ICPP::requireDatabase();

$number = Users::getTotalUsers($db);

echo "Number of students is: " . Users::getTotalUsers($db) . '<br>';
echo "type is " . gettype($number);
