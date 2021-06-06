<?php
session_start();
ob_start();

try {
    $db  = new PDO("mysql:host=localhost;dbname=ec;charset=utf8", "root", "");
}catch (PDOException $e){
    echo $e->getMessage();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (!isset($_POST['token']) || $_POST['token'] != $_SESSION['token']) {
    die('Gecersiz CSRF token');
}}

$_SESSION['token'] = bin2hex(random_bytes(20));

?>