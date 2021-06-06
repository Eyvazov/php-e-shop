<?php require '../layouts/header.php';
    require __DIR__ . '/../../controllers/users.php';
?>

<div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3>İstifadəçilər</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Bütün İstifadəçilər <small>basic table subtitle</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Ad Soyad</th>
                                <th>Qeydiyyat Tarixi</th>
                                <th>E-poçt</th>
                                <th>Telefon</th>
                                <th width="200px">Əməliyyatlar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $alluser):?>
                                <?php
                                $originalDate = $alluser['user_time'];
                                $newDate = date("d-m-Y", strtotime($originalDate));
                                ?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?= $alluser['user_first_last_name']?></td>
                                    <td><?= $newDate?></td>
                                    <td><?= $alluser['user_mail']?></td>
                                    <td><?= $alluser['user_gsm']?></td>
                                    <td>
                                        <button class="btn btn-primary">Düzəlt</button>
                                        <button class="btn btn-danger">Sil</button>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
</div>

<?php require '../layouts/footer.php'?>
