<?php
require_once __DIR__ . '/../../config/database.php';

class User {
    // ฟังก์ชันสำหรับดึงข้อมูลผู้ใช้ทั้งหมด
    public function getAllUsers() {
        try {
            // 1. ขอการเชื่อมต่อจากคลาส Database
            $pdo = Database::getConnection();

            // 2. เตรียมคำสั่ง SQL
            $stmt = $pdo->prepare("SELECT id, name, email FROM users ORDER BY name ASC");

            // 3. สั่งให้ทำงาน
            $stmt->execute();

            // 4. ดึงข้อมูลทั้งหมดออกมา
            $users = $stmt->fetchAll();

            return $users;

        } catch (\PDOException $e) {
            // ในโปรเจกต์จริง ควรจัดการ Error ให้ดีกว่านี้ เช่น เก็บ log
            die("Error: " . $e->getMessage());
        }
    }
}
?>
