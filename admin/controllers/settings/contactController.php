<?php require_once __DIR__ . '/../db.php';

    if (isset($_POST['contactSave'])){
        $setSave = $db->prepare("UPDATE settings SET
        set_tel=:tel,
        set_mobile=:mobile,
        set_fax=:fax,
        set_mail=:mail
        WHERE set_id = 1
        ");
        $update = $setSave->execute([
            'tel' => $_POST['set_tel'],
            'mobile' => $_POST['set_mobile'],
            'fax' => $_POST['set_fax'],
            'mail' => $_POST['set_mail'],
        ]);

        if ($update){
            header("Location:../../production/settings/contact-settings.php?status=ok");
        }else{
            header("Location:../../production/settings/contact-settings.php?status=no");
        }
    }

?>