<?php
require_once __DIR__ . '/../db.php';

    $set_call = $db->prepare("SELECT * FROM settings WHERE set_id=:id");
    $set_call->execute([
        "id" => 1
    ]);
    $connect = $set_call->fetch(PDO::FETCH_ASSOC);


?>