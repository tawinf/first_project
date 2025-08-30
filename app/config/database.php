<?php
// ตั้งค่าการเชื่อมต่อฐานข้อมูล
define('DB_HOST', 'localhost');
define('DB_NAME', 'my_project');
define('DB_USER', 'root'); // <-- แก้เป็น username ของคุณ
define('DB_PASS', ''); // <-- แก้เป็น password ของคุณ
define('DB_CHAR', 'utf8mb4');

class Database {
    private static $pdo;

    public static function getConnection() {
        if (!isset(self::$pdo)) {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHAR;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            try {
                self::$pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
            } catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }
        }
        return self::$pdo;
    }
}
?>
