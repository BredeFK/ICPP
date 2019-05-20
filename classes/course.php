<?php

class Course
{

    // Returns the courses to a user
    public static function getCoursesToUser($db, $userID)
    {
        $sql = "SELECT usercourse.courseid FROM usercourse INNER JOIN users ON usercourse.userid = users.id WHERE users.id = ?";
        $stmt = $db->prepare($sql);
        $param = array($userID);
        $stmt->execute($param);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Returns all courses
    public static function getAll($db)
    {
        $sql = "SELECT course.id, course.hash, course.coursecode, course.coursename, users.name, course.description, course.year, course.semester FROM course INNER JOIN users ON course.teacher = users.id";
        $stmt = $db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
