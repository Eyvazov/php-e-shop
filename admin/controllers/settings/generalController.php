<?php require_once __DIR__ . '/../db.php';

    if (isset($_POST['genSave'])){
        $setSave = $db->prepare("UPDATE settings SET
        set_site_name=:url,
        set_title=:title,
        set_desc=:desc,
        set_keywords=:keywords,
        set_author=:author,
        set_footer=:footer,
        set_city=:city,
        set_district=:district,
        set_address=:address,
        set_shift=:shift,
        set_zopim=:zopim,
        set_analytics=:analytics,
        set_maps=:maps,
        set_maintance=:maintance
        WHERE set_id = 1
        ");
        $update = $setSave->execute([
            'url' => $_SERVER['SERVER_NAME'],
            'title' => $_POST['set_title'],
            'desc' => $_POST['set_desc'],
            'keywords' => $_POST['set_keywords'],
            'footer' => $_POST['set_footer'],
            'author' => $_POST['set_author'],
            'city' => $_POST['set_city'],
            'district' => $_POST['set_district'],
            'address' => $_POST['set_address'],
            'shift' => $_POST['set_shift'],
            'zopim' => $_POST['set_zopim'],
            'analytics' => $_POST['set_analytics'],
            'maps' => $_POST['set_maps'],
            'maintance' => $_POST['set_maintance']
        ]);

        if ($update){
            header("Location:../../production/settings/general-settings.php?status=ok");
        }else{
            header("Location:../../production/settings/general-settings.php?status=no");
        }
    }

?>