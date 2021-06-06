<?php
$user = $db->prepare("SELECT * FROM users");
$user->execute();
$users = $user->fetchAll(PDO::FETCH_ASSOC);
?>
