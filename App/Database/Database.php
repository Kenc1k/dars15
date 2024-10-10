<?php
error_reporting(E_ALL); // Report all errors
ini_set('display_errors', 1);



class Database {
    private static $hostname = 'localhost';
    private static $user = 'root';
    private static $password = 'Str0ngP@ssw0rd!';
    private static $dbname = 'products_db';

    public static function getConnection() :PDO
    {
        try {
            $conn = new PDO("mysql:host=" . self::$hostname . ";dbname=" . self::$dbname, self::$user, self::$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Database connected";
            return $conn;
        } catch (PDOException $e) {
            die("Sorry we cannot connect your databse!" . $e->getMessage());
        }
    }
}
$connect = Database::getConnection();