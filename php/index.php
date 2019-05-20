<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . "/ICPP";

// Get ICPP class
require_once "$ROOT/classes/ICPP.php";

$twig = ICPP::requireTwig();

$db = ICPP::requireDatabase();

$courses = Course::getAll($db);

echo $twig->render('index.html', array(
    'courses' => $courses,
));
