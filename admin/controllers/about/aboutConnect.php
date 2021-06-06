<?php

$aboutCall = $db->prepare("SELECT * FROM about WHERE id=:id");
$aboutCall->execute([
    'id' => 1
]);

$aboutConn = $aboutCall->fetch(PDO::FETCH_ASSOC);





?>
