<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . "/ICPP";

// Get ICPP class
require_once "$ROOT/classes/ICPP.php";

$twig = ICPP::requireTwig();

$db = ICPP::requireDatabase();

$activeUsers = Users::getUsersActive($db);
$inactiveUsers = Users::getUsersInactive($db);
$coursesAndUsers = Course::getAllParticipantsForAllCourses($db);
$submissions = UserSubmission::getAllSubmissionsForAllAssignments($db);

echo $twig->render('index.html', array(
    'activeUsers' => count($activeUsers),
    'inactiveUsers' => count($inactiveUsers),
    'courseUsers' => $coursesAndUsers,
    'submissions' => $submissions,
));
