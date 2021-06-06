<?php require __DIR__ . '/controllers/db.php'?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <?php if (isset($_GET['status'])):?>
                  <?php if ($_GET['status'] == 'unauthorized'):?>
                      <div class="alert alert-danger">
                          <div class="text-center">
                              İcazəsiz Giriş
                          </div>
                      </div>
                  <?php elseif ($_GET['status'] == 'no_user'):?>
                      <div class="alert alert-warning">
                          <div class="text-center">
                              İstifadəçi maili və ya şifrəsi səhvdir!
                          </div>
                      </div>
              <?php elseif ($_GET['status'] == 'exit'):?>
              <div class="alert alert-success">
                  <div class="text-center">
                      Hesabdan Çıxıldı!
                  </div>
              </div>
              <?php endif;?>
              <?php endif;?>
              <form action="controllers/login.php" method="POST">
              <h1>Login Form</h1>
              <div>
                  <input type="hidden" name="token" value="<?= $_SESSION['token']?>">
                <input type="text" class="form-control" name="user_mail" placeholder="İstifadəçi E-poçtu" required />
              </div>
              <div>
                <input type="password" class="form-control" name="user_password" placeholder="Şifrə" required />
              </div>
              <div>
                  <button type="submit" name="login" class="btn btn-default submit">Daxil Ol</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
