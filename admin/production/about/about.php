<?php include '../layouts/header.php';
include '../../controllers/about/aboutConnect.php';

?>

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Haqqımızda</h3>
                </div>

                <div class="title_right">
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Əməliyyat statusu
                                <small>
                                    <?php
                                    if (isset($_GET['status'])):
                                        if ($_GET['status'] == 'ok'):?>
                                            <b style="color:green">Əməliiyyat uğurla yerinə yetirildi!</b>
                                        <?php else:?>
                                            <b style="color:red">Əməliyyat uğursuz oldu!</b>
                                        <?php endif;?>
                                    <?php endif;?>

                                </small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="demo-form2" action="<?php require __DIR__ . '/../../controllers/about/aboutController.php'?>" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Haqqımızda Başlığı <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="about_title" value="<?= $aboutConn['title']?>" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Haqqımızda Kontenti <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="summernote" name="about_content">
                                            <?= $aboutConn['content']?>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vizyon <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" value="<?= $aboutConn['vision']?>" name="about_vision" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Misyamız <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" value="<?= $aboutConn['mision']?>" name="about_mission" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Haqqımızda Video <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" value="<?= $aboutConn['video']?>" name="about_video" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" name="aboutSave" class="btn btn-primary">Məlumatları Yenilə</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ec/admin/production/layouts/footer.php' ?>