<?php require __DIR__ . '/../db.php';


if (isset($_POST['aboutSave'])){
    $aboutSave = $db->prepare("UPDATE about SET
        title=:title,
        content=:content,
        vision=:vision,
        mision=:mission,
        video=:video
    WHERE id = 1
    ");

    $update = $aboutSave->execute([
        'title' => $_POST['about_title'],
        'content' => $_POST['about_content'],
        'vision' => $_POST['about_vision'],
        'mission' => $_POST['about_mission'],
        'video' => $_POST['about_video']
    ]);

    if ($update){
        header("Location:../../production/about/about.php?status=ok");
    }else{
        header("Location:../../production/about/about.php?status=no");
    }
}




?>