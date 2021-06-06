
<!-- menu profile quick info -->
<div class="profile clearfix">
    <?php if (isset($_GET['status'])):?>
        <?php if ($_GET['status'] == 'sign_in'):?>
            <div class="alert alert-success alert-sm">
                <div class="text-center">
                    Daxil Olundu
                </div>
            </div>
        <?php endif;?>
    <?php endif;?>
    <div class="profile_pic">
        <img src="production/images/img.jpg" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
        <span>Welcome,</span>
        <h2><?= $have_user['user_first_last_name']?></h2>
    </div>
</div>
<!-- /menu profile quick info -->

<br />

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Ümumi</h3>
        <ul class="nav side-menu">
            <li><a href="production/index.php"><i class="fa fa-home"></i> Əsas Səhifə</a></li>
            <li><a><i class="fa fa-cog"></i> Tənzimləmələr <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="production/settings/general-settings.php">Ümumi Tənzimləmələr</a></li>
                    <li><a href="production/settings/social-settings.php">Sosial Şəbəkə Tənzimləmələri</a></li>
                    <li><a href="production/settings/smtp-settings.php">SMTP Tənzimləmələri</a></li>
                    <li><a href="production/settings/contact-settings.php">Əlaqə Məlumatları Tənzimləmələri</a></li>
                </ul>
            </li>
            <li><a href="production/users/users.php"><i class="fa fa-user"></i> İstifadəçilər</a></li>
            <li><a href="production/about/about.php"><i class="fa fa-info"></i> Haqqımızda</a></li>
        </ul>
    </div>

</div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->
</div>
</div>