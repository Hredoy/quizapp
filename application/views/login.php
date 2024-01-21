<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>Admin Login | <?php echo ($app_name) ? $app_name['message'] : "" ?></title>

        <?php base_url() . include 'include.php'; ?>
    </head>

    <body class="login">
        <div id="app">
            <section class="section">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                            <div class="login-brand">
                                <?php if (!empty($full_logo)) { ?>
                                    <img src="<?= base_url() . LOGO_IMG_PATH . $full_logo['message']; ?>" alt="logo" width="300">
                                <?php } ?>
                            </div>

                            <div class="card login_card">
                                <div class="card-body">
                                    <form method="POST" action="<?= base_url() ?>loginMe" class="needs-validation" novalidate="">
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">

                                        <div class="form-group">
                                            <label for="email">Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="Enter Username" required autofocus>
                                            <div class="invalid-feedback">
                                                Please fill in your Username
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="d-block">
                                                <label for="password" class="control-label">Password</label>
                                            </div>
                                            <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                                            <div class="invalid-feedback">
                                                Please fill in your Password
                                            </div>
                                        </div>

                                        <label class="checkbox">
                                            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                                        </label>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                    <div class="text-center mt-4 mb-3">
                                        <div class="text-muted"> Copyright &copy; WRTeam <?= date('Y') ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- General JS Scripts -->
        <script src="<?= base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- Template JS File -->
        <script src="<?= base_url(); ?>assets/js/stisla.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/scripts.js" type="text/javascript"></script>

        <!-- Toast JS -->
        <script src="<?= base_url(); ?>assets/js/iziToast.min.js"></script>

        <?php if ($this->session->flashdata('error')) { ?>
            <script type='text/javascript'>
                iziToast.error({
                    message: '<?= $this->session->flashdata('error'); ?>',
                    position: 'topRight'
                });
            </script>
        <?php } ?>
    </body>

</html>