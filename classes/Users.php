<?php

// Class for the users table
class Users
{


    // Returns a number of how many users in db
    public static function getTotalUsers($db)
    {
        $sql = "SELECT COUNT(id) FROM users";
        $stmt = $db->prepare($sql);
        $stmt->execute();

        $users = $stmt->fetch(PDO::FETCH_ASSOC);

        $element = reset($users);
        if($element == false){
            return 0;
        } else {
            return $element;
        }
    }
}
