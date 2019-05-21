<?php

// Get root
$ROOT = $_SERVER['DOCUMENT_ROOT'] . "/ICPP";

// Get ICPP class
require_once "$ROOT/classes/ICPP.php";

$db = ICPP::requireDatabase();

$userID = 1;



// Users
$users = Users::getTotalUsers($db);
$user = Users::getUserWithID($db, $userID);
$inactiveUsers = Users::getUsersInactive($db);
$activeUsers = Users::getUsersActive($db);

// Course
$courses = Course::getCoursesToUser($db, $userID);
$allCourses = Course::getAll($db);
$coursesAndUsers = Course::getAllParticipantsForAllCourses($db);

// Logs
$logsDistinct = Logs::getAllDistinct($db);
$logs = Logs::getAll($db);

// UserSubmission
$submissions = UserSubmission::getAllSubmissionsForAllAssignments($db);
$topSubmissions = UserSubmission::getTopSubmitors($db);


// USERS
// Display all users
echo "<h1>Users</h1>";
echo "<h2>getTotalUsers</h2>";
echo "Variable type is: " . gettype($users) . '<br>';
echo "Count is: " . count($users) . '<br><br>';
foreach ($users as $result) {
    echo $result['id'] . " " . $result['name'] . " " . $result['email_student'] . " " . $result['teacher'] . " " . $result['email_private'], '<br>';
}

// Get specific user
echo "<h2>getUserWithID where id is $userID</h2>";
echo "Variable type is: " . gettype($user) . '<br>';
echo "Count is: " . count($user) . '<br><br>';
echo $user['id'] . " " . $user['name'] . " " . $user['email_student'] . " " . $user['teacher'] . " " . $user['email_private'], '<br>';


// Display inactive users
echo "<h2>getUsersInactive</h2>";
echo "Variable type is: " . gettype($inactiveUsers) . '<br>';
echo "Count is: " . count($inactiveUsers) . '<br><br>';;
foreach ($inactiveUsers as $result) {
    echo $result['id'] . " " . $result['name'] . " " . $result['email_student'] . " " . $result['teacher'] . " " . $result['email_private'], '<br>';
}

// Display active users
echo "<h2>getUsersActive</h2>";
echo "Variable type is: " . gettype($activeUsers) . '<br>';
echo "Count is: " . count($activeUsers) . '<br><br>';;
foreach ($activeUsers as $result) {
    echo $result['id'] . " " . $result['name'] . " " . $result['email_student'] . " " . $result['teacher'] . " " . $result['email_private'], '<br>';
}

// COURSE
// Display courses to a user
echo "<h1>Course</h1>";
echo "<h2>getAll</h2>";
echo "Variable type is: " . gettype($allCourses) . '<br>';
echo "Count is: " . count($allCourses) . '<br>';;
foreach ($allCourses as $result) {
    echo $result['id'] . " " . $result['hash'] . " " . $result['coursecode'] . " " . $result['coursename'] . " " . $result['name'] . " " . $result['description'] . " " . $result['year'] . " " . $result['semester'], '<br>';
}

echo "<h2>getCoursesToUser to user with id $userID</h2>";
echo "Variable type is: " . gettype($courses) . '<br>';
echo "Count is: " . count($courses) . '<br><br>';;
foreach ($courses as $result) {
    echo $result['courseid'], '<br>';
}

echo "<h2>getAllParticipantsForAllCourses</h2>";
echo "Variable type is: " . gettype($coursesAndUsers) . '<br>';
echo "Count is: " . count($coursesAndUsers) . '<br><br>';;
foreach ($coursesAndUsers as $result) {
    echo $result['coursecode'] . " " . $result['coursename'] . " " . $result['users'], '<br>';
}


// LOGS
// Display all logs
echo "<h1>Logs</h1>";
echo "<h2>getAll</h2>";
echo "Variable type is: " . gettype($logs) . '<br>';
echo "Count is: " . count($logs) . '<br><br>';;
foreach ($logs as $result) {
    echo $result['id'] . " " . $result['user_id'] . " " . $result['timestamp'] . " " . $result['activity'] . " " . $result['assignment_id'] . " " . $result['course_id'] . " " . $result['submission_id'] . " " . $result['review_id'] . " " . $result['group_id'] . " " . $result['old_value'] . " " . $result['new_value'] . " " . $result['affected_user_id'], '<br>';
}

echo "<h2>getAllDistinct</h2>";
echo "Variable type is: " . gettype($logsDistinct) . '<br>';
echo "Count is: " . count($logsDistinct) . '<br><br>';;
foreach ($logsDistinct as $result) {
    echo $result['activity'] . " " . $result['c'], '<br>';
}

// USERSUBMISSION
// Display all submissions
echo "<h1>UserSubmission</h1>";
echo "<h2>getAllSubmissionsForAllAssignments</h2>";
echo "Variable type is: " . gettype($submissions) . '<br>';
echo "Count is: " . count($submissions) . '<br><br>';;
foreach ($submissions as $result) {
    echo $result['submissions'] . " " . $result['assignment'], '<br>';
}

echo "<h2>getTopSubmitors</h2>";
echo "Variable type is: " . gettype($topSubmissions) . '<br>';
echo "Count is: " . count($topSubmissions) . '<br><br>';;
foreach ($topSubmissions as $result) {
    echo $result['name'] . " " . $result['user_id'] . " " . $result['submissions'], '<br>';
}
