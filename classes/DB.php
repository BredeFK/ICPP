<?php

    // Class for connecting/initializong db
    class DB{
        private static $db=null;
        private $dsn = 'mysql:dbname=cs53;host=127.0.0.1;charset=utf8mb4';
        private $user = 'root';
        private $password = '';
        private $dbh = null;

        /**
         * DB constructor.
         */
        private function __construct() {
            try {
                $this->dbh = new PDO($this->dsn, $this->user, $this->password);
                $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // @debug magic
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage(); // Don't use this in production 
            }
        }
        /**
         * @function getDBConnection
         * @return mixed
         */
        public static function getDBConnection() {
            if (DB::$db==null) {
                DB::$db = new self();
            }
            return DB::$db->dbh;
        }
    }
