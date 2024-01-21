<!DOCTYPE html>
<html lang="en">
    <head>        
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>System Update | <?php echo ($app_name) ? $app_name['message'] : "" ?></title>   

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
                            <h1>System Update <small class="text-danger"> Current Version <?php echo (!empty($system_version['message'])) ? $system_version['message'] : "" ?></small></h1>
                        </div>
                        <div class="section-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body mt-4">
                                            <form method="post" class="needs-validation" novalidate=""  enctype="multipart/form-data">
                                                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                                <?php
                                                $quiz_url = $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
                                                ?>
                                                <input type="hidden" name="quiz_url" value="<?= $quiz_url; ?>" required/>
                                                <div class="form-group row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <label>Purchase Code</label>
                                                        <input type="text" name="purchase_code" required placeholder="Enter Purchase Code" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row">                                                   
                                                    <div class="col-md-6 col-sm-12">
                                                        <label class="control-label">Update Zip <small class="text-danger">Only zip file allow</small></label>
                                                        <input id="file" name="file" type="file" accept=".zip,.rar" required class="form-control">
                                                        <small class="text-danger">Your Current Version is <?php echo (!empty($system_version['message'])) ? $system_version['message'] : "" ?> , Please update nearest version here if available</small>
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

        <?php
            $json_file = 'assets/firebase_config.json';
            if (!file_exists($json_file)) {
                redirect('firebase-configurations');
            }
        ?>

    </body>
</html>