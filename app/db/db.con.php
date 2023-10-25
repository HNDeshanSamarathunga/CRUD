<?php
require_once('db.config.php');

class Database
{
    public static $connection;

    public static function setUpConnection()
    {
        if (!isset(Database::$connection)) {
            $host = "localhost";
            $username = "root";
            $password = "1234";
            $database = "crud_app";
            $port = "3306";

            Database::$connection = new mysqli($host, $username, $password, $database, $port);

            if (Database::$connection->connect_error) {
                die("Connection failed: " . Database::$connection->connect_error);
            } else {
                echo "Connection successful!";
            }
        }
    }

    public static function iud($q)
    {
        Database::setUpConnection();
        $result = Database::$connection->query($q);

        if ($result === false) {
            echo "Error: " . Database::$connection->error;
        } else {
            echo "Query executed successfully!";
        }
    }

    public static function search($q)
    {
        Database::setUpConnection();
        $resultset = Database::$connection->query($q);

        if ($resultset === false) {
            echo "Error: " . Database::$connection->error;
        } else {
            echo "Query executed successfully!";
        }

        return $resultset;
    }
}

