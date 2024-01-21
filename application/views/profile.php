<!DOCTYPE html>
<html lang="en">
    <head>        
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile | <?php echo ($app_name) ? $app_name['message'] : "" ?></title>   

        <?php base_url() . include 'include.php'; ?>  
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper">
                <?php base_url() . include 'header.php'; ?>  

                <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Profile</h1>
                        </div>
                        <div class="section-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body mt-4">
                                            <form method="post" class="needs-validation" novalidate=""  enctype="multipart/form-data">
                                                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                                <div class="form-group row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <label class="control-label">Quiz Name</label>
                                                        <input name="app_name" type="text" value="<?php echo ($app_name) ? $app_name['message'] : "" ?>" required class="form-control" placeholder="Enter Quiz Name"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row">                                                   
                                                    <div class="col-md-6 col-sm-12">
                                                        <label class="control-label">Full Logo <small class="text-danger">(460 * 115 Size Allowed)</small></label>
                                                        <input id="full_file" name="full_file" type="file" accept="image/*" class="form-control">
                                                        <small class="text-danger">Image type supported (png, jpg ,jpeg and svg)</small>
                                                        <p style="display: none" id="msg_full_file" class="badge badge-danger"></p>
                                                    </div> 
                                                    <div class="col-md-6 col-sm-12">
                                                        <label class="control-label">Half Logo <small class="text-danger">(255 * 255 Size Allowed)</small></label>
                                                        <input id="half_file" name="half_file" type="file" accept="image/*" class="form-control">
                                                        <small class="text-danger">Image type supported (png, jpg ,jpeg and svg)</small>
                                                        <p style="display: none" id="msg_half_file" class="badge badge-danger"></p>
                                                    </div> 
                                                </div> 

                                                <div class="form-group row"> 
                                                    <div class="col-md-6 col-sm-12">
                                                        <input type="hidden" name="full_url" value="<?= LOGO_IMG_PATH . $full_logo['message']; ?>">
                                                        <?php if (!empty($full_logo)) { ?>
                                                            <img src="<?= base_url() . LOGO_IMG_PATH . $full_logo['message']; ?>" alt="logo" width="250">
                                                        <?php } ?>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <input type="hidden" name="half_url" value="<?= LOGO_IMG_PATH . $half_logo['message']; ?>">
                                                        <?php if (!empty($half_logo)) { ?>
                                                            <img src="<?= base_url() . LOGO_IMG_PATH . $half_logo['message']; ?>" alt="logo" height="60">
                                                        <?php } ?>
                                                    </div>
                                                </div>  

                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <input type="submit" name="btnadd" value="Submit" class="<?= BUTTON_CLASS ?>"/>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>

        <?php base_url() . include 'footer.php'; ?>

        <script type="text/javascript">
            var _URL = window.URL || window.webkitURL;

            $("#full_file").change(function (e) {
                var file, img;

                if ((file = this.files[0])) {
                    img = new Image();
                    img.onerror = function () {
                        $('#full_file').val('');
                        $('#msg_full_file').html('<?= INVALID_IMAGE_TYPE; ?>');
                        $('#msg_full_file').show().delay(3000).fadeOut();
                    };
                    img.src = _URL.createObjectURL(file);
                }
            });

            $("#half_file").change(function (e) {
                var file, img;

                if ((file = this.files[0])) {
                    img = new Image();
                    img.onerror = function () {
                        $('#half_file').val('');
                        $('#msg_half_file').html('<?= INVALID_IMAGE_TYPE; ?>');
                        $('#msg_half_file').show().delay(3000).fadeOut();
                    };
                    img.src = _URL.createObjectURL(file);
                }
            });
        </script>


    </body>
</html>