<?php
require_once __DIR__ . '/../Models/User.php';

class UserController {
    public function listUsers() {
        // 1. สร้าง object จาก Model
        $userModel = new User();

        // 2. เรียกใช้เมธอดใน Model เพื่อดึงข้อมูลผู้ใช้ทั้งหมด
        $users = $userModel->getAllUsers();

        // 3. เรียก View มาแสดงผล และส่งข้อมูล $users ไปด้วย
        // เราใช้ require เพื่อให้ไฟล์ View สามารถเข้าถึงตัวแปร $users ที่เราสร้างขึ้นได้
        require_once __DIR__ . '/../Views/user_list.php';
    }
}
?>
