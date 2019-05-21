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
    
}
