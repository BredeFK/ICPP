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
}
