<?php include '../layouts/header.php';
include '../../controllers/settings/generalSetConnect.php';

?>

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Əlaqə Məlumatları</h3>
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
                                    <?php if (isset($_GET['status'])):?>
                                        <?php if ($_GET['status'] == 'ok'):?>
                                            <b style="color: green">Əməliyyat uğurla yerinə yetirildi!</b>
                                        <?php else: ?>
                                            <b style="color: red">Əməliyyat uğursuz oldu!</b>
                                        <?php endif;?>
                                    <?php endif;?>
                                </small>
                            </h2>
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
                            <form id="demo-form2" action="<?php require __DIR__ .  '/../../controllers/settings/contactController.php';?>" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ofis telefonu <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="hidden" name="token" value="<?= $_SESSION['token']?>">
                                                    <input type="tel" name="set_tel" value="<?= $connect['set_tel']?>" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mobil telefon <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="tel" value="<?= $connect['set_mobile']?>" name="set_mobile" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">FAX <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="tel" value="<?= $connect['set_fax']?>" name="set_fax" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">E-poçt ünvanı <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="email" value="<?= $connect['set_mail']?>" name="set_mail" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" name="contactSave" class="btn btn-primary">Məlumatları Yenilə</button>
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