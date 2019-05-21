<?php

// Class for the logs table
class Logs{

    // Returns all logs from db
    public static function getAll($db)
    {
        $sql = "SELECT logs.id, logs.user_id, logs.timestamp, logs.activity, logs.assignment_id, logs.course_id, logs.submission_id, logs.review_id, logs.group_id, logs.old_value, logs.new_value, logs.affected_user_id 
        FROM logs";
        $stmt = $db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Returns the top 5 numbers of each distinct log from db
    public static function getAllDistinct($db)
    {
        $sql = "SELECT COUNT(logs.activity) as c, logs.activity FROM logs GROUP BY logs.activity ORDER BY `c` DESC LIMIT 5";
        $stmt = $db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
