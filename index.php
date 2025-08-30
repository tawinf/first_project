<?php
require_once __DIR__ . '/../app/Controllers/UserController.php';

// Router แบบง่ายๆ
// ในโปรเจกต์จริงจะซับซ้อนกว่านี้
// ตัวอย่าง: ถ้า URL คือ /users ให้เรียก UserController@listUsers

$userController = new UserController();
$userController->listUsers();
?>
