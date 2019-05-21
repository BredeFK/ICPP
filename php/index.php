<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . "/ICPP";

// Get ICPP class
require_once "$ROOT/classes/ICPP.php";

$twig = ICPP::requireTwig();

$db = ICPP::requireDatabase();

$activeUsers = Users::getUsersActive($db);
$inactiveUsers = Users::getUsersInactive($db);
$users = Users::getTotalUsers($db);
$coursesAndUsers = Course::getAllParticipantsForAllCourses($db);
$submissions = UserSubmission::getAllSubmissionsForAllAssignments($db);
$logs = Logs::getAllDistinct($db);
$numbLogs = Logs::getAll($db);

$numbTotalSubmissions = 0;
$students = 0;
$teachers = 0;

foreach ($submissions as $item){
    $numbTotalSubmissions += $item['submissions'];
}

foreach ($users as $user){
    if($user['teacher']){
        $teachers++;
    } else {
        $students++;
    }
}


echo $twig->render('index.html', array(
    'activeUsers' => count($activeUsers),
    'inactiveUsers' => count($inactiveUsers),
    'courseUsers' => $coursesAndUsers,
    'submissions' => $submissions,
    'logs' => $logs,
    'numbCourses' => count($coursesAndUsers),
    'numbAssignments' => count($submissions),
    'numbLogs' => count($numbLogs),
    'numbSubmissions' => $numbTotalSubmissions,
    'numbUsers' => count($users),
    'numbStudents' => $students,
    'numbTeachers' => $teachers,
));
