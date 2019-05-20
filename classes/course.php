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
}
