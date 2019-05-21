<?php

// Class for the user_reviews table
class UserReviews{

    /*
    // Returns all reviews for all assignments
    public static function getAllReviewsForAllAssignments($db) {
        $sql = "SELECT COUNT(DISTINCT user_reviews.submitted) as reviews, assignments.name AS assignment
        FROM user_reviews
        INNER JOIN fields ON user_reviews.name = fields.name 
        INNER JOIN assignments ON user_reviews.assignment_id = assignments.id
        GROUP BY user_reviews.assignment_id";  
        $stmt = $db->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    */

    // Returns the top 15 users that has reviewd submissions the most
    public static function getTopReviewers($db) {
        $sql = "SELECT COUNT(DISTINCT user_reviews.submitted) as reviews, assignments.name AS assignment
        FROM user_reviews
        INNER JOIN fields ON user_reviews.name = fields.name 
        INNER JOIN assignments ON user_reviews.assignment_id = assignments.id
        GROUP BY user_reviews.assignment_id";  
        $stmt = $db->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}