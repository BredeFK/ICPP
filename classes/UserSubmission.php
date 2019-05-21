<?php


// Class for the user_submission table
class UserSubmission{
    
    // Returns all submissions for all assignments
    public static function getAllSubmissionsForAllAssignments($db) {
        $sql = "SELECT COUNT(DISTINCT user_submissions.user_id) as submissions, assignments.name AS assignment
        FROM user_submissions
        INNER JOIN fields ON user_submissions.name = fields.name 
        INNER JOIN assignments ON user_submissions.assignment_id = assignments.id
        GROUP BY user_submissions.assignment_id";  
        $stmt = $db->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Returns the top 15 students that has submitted most assignments
    public static function getTopSubmitors($db) {
        $sql = "SELECT COUNT(DISTINCT user_submissions.submission_id) as submissions, user_submissions.user_id, users.name
        FROM user_submissions
        INNER JOIN fields ON user_submissions.name = fields.name
        INNER JOIN users ON user_submissions.user_id = users.id
        GROUP BY user_submissions.user_id
        ORDER BY submissions DESC
        LIMIT 15";  
        $stmt = $db->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
