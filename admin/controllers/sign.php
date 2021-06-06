<?php

$user_fetch = $db->prepare("SELECT * FROM users WHERE user_mail =:user_mail");
$user_fetch->execute([
    'user_mail' => $_SESSION['user_mail']
]);
$count = $user_fetch->rowCount();
$have_user = $user_fetch->fetch(PDO::FETCH_ASSOC);
if ($count == 0){
    header('Location:../login.php?status=unauthorized');
    die();
}
?>