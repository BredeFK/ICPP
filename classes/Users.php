<?php

// Class for the users table
class Users
{


    // Returns a number of how many users in db
    public static function getTotalUsers($db)
    {
        $sql = "SELECT users.id, users.name, users.email_student, users.teacher, users.email_private FROM users";
        $stmt = $db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Returns a number of how many users that are not in a cours in db
    public static function getUsersInactive($db)
    {
        $sql = "SELECT users.id, users.name, users.email_student, users.teacher, users.email_private FROM users
        LEFT JOIN usercourse ON usercourse.userid = users.id
        WHERE usercourse.id IS NULL";
        $stmt = $db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Returns a number of how many users that are in a cours in db
    public static function getUsersActive($db)
    {
        $sql = "SELECT DISTINCT users.id, users.name, users.email_student, users.teacher, users.email_private FROM users
        INNER JOIN usercourse ON usercourse.userid = users.id";
        $stmt = $db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
