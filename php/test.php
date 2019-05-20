<?php

// Get root
$ROOT = $_SERVER['DOCUMENT_ROOT'] . "/ICPP";

// Get ICPP class
require_once "$ROOT/classes/ICPP.php";
require_once "$ROOT/classes/Users.php";

$db = ICPP::requireDatabase();

// Get users data
$users = Users::getTotalUsers($db);
$inactiveUsers = Users::getUsersInactive($db);
$activeUsers = Users::getUsersActive($db);

// Display all users
echo "<h1>Users</h1>";
echo "<h2>getTotalUsers</h2>";
echo "Variable type is: " . gettype($users). '<br>';
echo "Count is: " . count($users) . '<br><br>';
foreach($users as $result) {
    echo $result['id'] . " " . $result['name'] . " " . $result['email_student'] . " " . $result['teacher'] . " " . $result['email_private'], '<br>';
}

// Display inactive users
echo "<h2>getUsersInactive</h2>";
echo "Variable type is: " . gettype($inactiveUsers). '<br>';
echo "Count is: " . count($inactiveUsers) . '<br><br>';;
foreach($inactiveUsers as $result) {
    echo $result['id'] . " " . $result['name'] . " " . $result['email_student'] . " " . $result['teacher'] . " " . $result['email_private'], '<br>';
}

// Display active users
echo "<h2>getUsersActive</h2>";
echo "Variable type is: " . gettype($activeUsers). '<br>';
echo "Count is: " . count($activeUsers) . '<br><br>';;
foreach($activeUsers as $result) {
    echo $result['id'] . " " . $result['name'] . " " . $result['email_student'] . " " . $result['teacher'] . " " . $result['email_private'], '<br>';
}

