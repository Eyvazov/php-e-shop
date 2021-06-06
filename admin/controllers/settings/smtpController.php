<?php require_once __DIR__ . '/../db.php';

    if (isset($_POST['smtpSave'])){
        $setSave = $db->prepare("UPDATE settings SET
        set_smtp_host=:host,
        set_smtp_port=:port,
        set_smtp_user=:user,
        set_smtp_pass=:password
        WHERE set_id = 1
        ");
        $update = $setSave->execute([
            'host' => $_POST['set_smtp_host'],
            'port' => $_POST['set_smtp_port'],
            'user' => $_POST['set_smtp_user'],
            'password' => $_POST['set_smtp_pass']
        ]);

        if ($update){
            header("Location:../../production/settings/smtp-settings.php?status=ok");
        }else{
            header("Location:../../production/settings/smtp-settings.php?status=no");
        }
    }

?>