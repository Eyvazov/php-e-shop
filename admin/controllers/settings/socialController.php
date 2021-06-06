<?php require_once __DIR__ . '/../db.php';

    if (isset($_POST['socialSave'])){
        $setSave = $db->prepare("UPDATE settings SET
        set_fb=:fb,
        set_tw=:tw,
        set_yt=:yt
        WHERE set_id = 1
        ");
        $update = $setSave->execute([
            'fb' => $_POST['set_fb'],
            'tw' => $_POST['set_tw'],
            'yt' => $_POST['set_yt'],
        ]);

        if ($update){
            header("Location:../../production/settings/social-settings.php?status=ok");
        }else{
            header("Location:../../production/social-settings.php?status=no");
        }
    }

?>