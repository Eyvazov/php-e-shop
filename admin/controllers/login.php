<?php
require __DIR__ . '/db.php';

function post($post){
    $login = htmlspecialchars($_POST[$post]);
    return $login;
}

if (isset($_POST['login'])){
    $mail = post('user_mail');
    $pass = md5(post('user_password'));

    $user_call = $db->prepare("SELECT * FROM users WHERE user_mail = :mail AND user_password = :password AND user_permission = :permission");
    $user_call->execute([
        'mail' => $mail,
        'password' => $pass,
        'permission' => 17
    ]);

    $count = $user_call->rowCount();
    if ($count == 1){
        $_SESSION['user_mail'] = $mail;
        header('Location:../production/index.php?status=sign_in');
        exit;
    }else{
        header('Location:../login.php?status=no_user');
    }

}else{
    echo "daxil olmadi!";
}


?>
