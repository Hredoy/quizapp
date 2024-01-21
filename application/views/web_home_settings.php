<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home Settings | <?php echo ($app_name) ? $app_name['message'] : "" ?></title>

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
                        <h1>Home Settings for Web <small class="text-small">Note that this will directly reflect the changes in Web</small></h1>
                    </div>
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body mt-4">
                                    <form method="post" class="needs-validation" novalidate="" enctype="multipart/form-data">
                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">


                                        <!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                        <!-- Section 1  -->
                                        <h4>
                                            <label class="control-label"><b>Section 1</b></label>
                                        </h4>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Heading</label>
                                                <input name="section1_heading" type="text" minlength=1 maxlength="50" class="form-control"  value="<?php echo (isset($section1_heading) && !empty($section1_heading['message'])) ? $section1_heading['message'] : "Why Choose Us Our ".$app_name['message'] ?>" required>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Cover Image</label>
                                                <?php if(isset($section1_cover_image['message']) && !empty($section1_cover_image['message'])) { ?>
                                                    <input class="form-control section1_cover_image" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section1_cover_image">
                                                    <p style="display: none" id="section1_cover_image_img_error_msg" class="alert alert-danger"></p>
                                                    <div class="mt-1"><a href='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section1_cover_image['message'] ?>' data-lightbox="Logos"><img src='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section1_cover_image['message'] ?>' height=50, width=50></a></div>
                                                <?php }else{?>
                                                    <input class="form-control section1_cover_image" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section1_cover_image" required>
                                                    <p style="display: none" id="section1_cover_image_img_error_msg" class="alert alert-danger"></p>
                                                <?php }?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4 col-sm-12">
                                                <label class="control-label">Title 1</label>
                                                <input name="section1_title1" type="text" minlength=1 maxlength="50" class="form-control"  value='<?php echo (isset($section1_title1) && !empty($section1_title1['message'])) ? $section1_title1['message'] : "Easy to Use" ?>' required>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label class="control-label">Title 2</label>
                                                <input name="section1_title2" type="text" minlength=1 maxlength="50" class="form-control"  value='<?php echo (isset($section1_title2) && !empty($section1_title2['message'])) ? $section1_title2['message'] : "Many Quiz Zone" ?>' required>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label class="control-label">Title 3</label>
                                                <input name="section1_title3" type="text" minlength=1 maxlength="50" class="form-control"  value='<?php echo (isset($section1_title3) && !empty($section1_title3['message'])) ? $section1_title3['message'] : "Unique Admin Panel" ?>' required>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-4">
                                            <div class="col-md-3 col-sm-12">
                                                <label class="control-label">Image With Title 1</label>
                                                <input name="section1_image_title_title1" type="text" minlength=1 maxlength="50" class="form-control"  value='<?php echo (isset($section1_image_title_title1) && !empty($section1_image_title_title1['message'])) ? $section1_image_title_title1['message'] : "Life Lines" ?>' required>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label class="control-label">Image With Title 2</label>
                                                <input name="section1_image_title_title2" type="text" minlength=1 maxlength="50" class="form-control"  value='<?php echo (isset($section1_image_title_title2) && !empty($section1_image_title_title2['message'])) ? $section1_image_title_title2['message'] : "Leaderboard" ?>' required>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label class="control-label">Image With Title 3</label>
                                                <input name="section1_image_title_title3" type="text" minlength=1 maxlength="50" class="form-control"  value='<?php echo (isset($section1_image_title_title3) && !empty($section1_image_title_title3['message'])) ? $section1_image_title_title3['message'] : "Battle Quiz" ?>' required>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label class="control-label">Image With Title 4</label>
                                                <input name="section1_image_title_title4" type="text" minlength=1 maxlength="50" class="form-control"  value='<?php echo (isset($section1_image_title_title4) && !empty($section1_image_title_title4['message'])) ? $section1_image_title_title4['message'] : "Many Level" ?>' required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 col-sm-12">
                                                <?php if(isset($section1_image_title_image1['message']) && !empty($section1_image_title_image1['message'])) { ?>
                                                    <input class="form-control section1_image_title_image1" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section1_image_title_image1">
                                                    <p style="display: none" id="section1_image_title_image1_img_error_msg" class="alert alert-danger"></p>
                                                    <div class="mt-1"><a href='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section1_image_title_image1['message'] ?>' data-lightbox="Logos"><img src='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section1_image_title_image1['message'] ?>' height=50, width=50></a></div>
                                                <?php }else{?>
                                                    <input class="form-control section1_image_title_image1" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section1_image_title_image1" required>
                                                    <p style="display: none" id="section1_image_title_image1_img_error_msg" class="alert alert-danger"></p>
                                                <?php } ?>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <?php if(isset($section1_image_title_image2['message']) && !empty($section1_image_title_image2['message'])) { ?>
                                                    <input class="form-control section1_image_title_image2" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section1_image_title_image2">
                                                    <p style="display: none" id="section1_image_title_image2_img_error_msg" class="alert alert-danger"></p>
                                                    <div class="mt-1"><a href='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section1_image_title_image2['message'] ?>' data-lightbox="Logos"><img src='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section1_image_title_image2['message'] ?>' height=50, width=50></a></div>
                                                <?php } else { ?>
                                                    <input class="form-control section1_image_title_image2" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section1_image_title_image2" required>
                                                    <p style="display: none" id="section1_image_title_image2_img_error_msg" class="alert alert-danger"></p>
                                                <?php } ?>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <?php if(isset($section1_image_title_image3['message']) && !empty($section1_image_title_image3['message'])) { ?>
                                                    <input class="form-control section1_image_title_image3" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section1_image_title_image3">
                                                    <p style="display: none" id="section1_image_title_image3_img_error_msg" class="alert alert-danger"></p>
                                                    <div class="mt-1"><a href='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section1_image_title_image3['message'] ?>' data-lightbox="Logos"><img src='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section1_image_title_image3['message'] ?>' height=50, width=50></a></div>
                                                <?php } else { ?>
                                                    <input class="form-control section1_image_title_image3" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section1_image_title_image3" required>
                                                    <p style="display: none" id="section1_image_title_image3_img_error_msg" class="alert alert-danger"></p>
                                                <?php } ?>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <?php if(isset($section1_image_title_image4['message']) && !empty($section1_image_title_image4['message'])) { ?>
                                                    <input class="form-control section1_image_title_image4" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section1_image_title_image4">
                                                    <p style="display: none" id="section1_image_title_image4_img_error_msg" class="alert alert-danger"></p>
                                                    <div class="mt-1"><a href='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section1_image_title_image4['message'] ?>' data-lightbox="Logos"><img src='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section1_image_title_image4['message'] ?>' height=50, width=50></a></div>
                                                <?php } else { ?>
                                                    <input class="form-control section1_image_title_image4" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section1_image_title_image4" required>
                                                    <p style="display: none" id="section1_image_title_image4_img_error_msg" class="alert alert-danger"></p>
                                                <?php } ?>
                                            </div>
                                        </div>



                                        <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                        <!-- Section 2  -->
                                        <hr class="mt-4 mb-4">
                                        <h4>
                                            <label class="control-label"><b>Section 2</b></label>
                                        </h4>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Heading</label>
                                                <input name="section2_heading" type="text" minlength=1 maxlength="50" class="form-control"  value='<?php echo ( isset($section2_heading) && !empty($section2_heading['message'])) ? $section2_heading['message'] : "Incredible Quiz Features"?>' required>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Cover Image</label>
                                                <?php if(isset($section2_cover_image['message']) && !empty($section2_cover_image['message'])) { ?>
                                                    <input class="form-control section2_cover_image" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section2_cover_image">
                                                    <p style="display: none" id="section2_cover_image_img_error_msg" class="alert alert-danger"></p>
                                                    <div class="mt-1"><a href='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section2_cover_image['message'] ?>' data-lightbox="Logos"><img src='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section2_cover_image['message'] ?>' height=50, width=50></a></div>
                                                <?php } else {?>
                                                    <input class="form-control section2_cover_image" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section2_cover_image" required>
                                                    <p style="display: none" id="section2_cover_image_img_error_msg" class="alert alert-danger"></p>
                                                <?php }?>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-4">
                                            <div class="col-md-3 col-sm-12">
                                                <label class="control-label">Title 1</label>
                                                <input name="section2_title_desc_title1" type="text" minlength=1 maxlength="50" class="form-control"  value='<?php echo ( isset($section2_title_desc_title1) && !empty($section2_title_desc_title1['message'])) ? $section2_title_desc_title1['message'] :"Quiz Battle Royal" ?>' required>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label class="control-label">Title 2</label>
                                                <input name="section2_title_desc_title2" type="text" minlength=1 maxlength="50" class="form-control"  value='<?php echo ( isset($section2_title_desc_title2) && !empty($section2_title_desc_title2['message'])) ? $section2_title_desc_title2['message'] : "Fun Learning Quizzes" ?>' required>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label class="control-label">Title 3</label>
                                                <input name="section2_title_desc_title3" type="text" minlength=1 maxlength="50" class="form-control"  value='<?php echo ( isset($section2_title_desc_title3) && !empty($section2_title_desc_title3['message'])) ? $section2_title_desc_title3['message'] : "Self-Improvement Challenges" ?>' required>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label class="control-label">Title 4</label>
                                                <input name="section2_title_desc_title4" type="text" minlength=1 maxlength="50" class="form-control"  value='<?php echo ( isset($section2_title_desc_title4) && !empty($section2_title_desc_title4['message'])) ? $section2_title_desc_title4['message'] : "Guess the Word" ?>' required>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-3 col-sm-12">
                                                <textarea name="section2_title_desc_desc1" class="form-control" minlength=1 maxlength="120" id="section2_title_desc_desc1" cols="20" rows="5" placeholder="Enter Description for Title 1"><?php echo (isset($section2_title_desc_desc1) && !empty($section2_title_desc_desc1['message'])) ? $section2_title_desc_desc1['message'] : "Challenge your friends, conquer the competition, and prove your intellectual prowes." ?></textarea>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <textarea name="section2_title_desc_desc2" class="form-control" minlength=1 maxlength="120" id="section2_title_desc_desc2" cols="20" rows="5" placeholder="Enter Description for Title 2"><?php echo (isset($section2_title_desc_desc2) && !empty($section2_title_desc_desc2['message'])) ? $section2_title_desc_desc2['message'] : "Expand your knowledge with trivia that's both entertaining and informative." ?></textarea>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <textarea name="section2_title_desc_desc3" class="form-control" minlength=1 maxlength="120" id="section2_title_desc_desc3" cols="20" rows="5" placeholder="Enter Description for Title 3"><?php echo (isset($section2_title_desc_desc3) && !empty($section2_title_desc_desc3['message'])) ? $section2_title_desc_desc3['message'] : "Put your skills to the test and see how you measure up."?></textarea>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <textarea name="section2_title_desc_desc4" class="form-control" minlength=1 maxlength="120" id="section2_title_desc_desc4" cols="20" rows="5" placeholder="Enter Description for Title 4"><?php echo (isset($section2_title_desc_desc4) && !empty($section2_title_desc_desc4['message'])) ? $section2_title_desc_desc4['message'] : "Can you solve it? Get ready for an exciting challenge!" ?></textarea>
                                            </div>
                                        </div>

                                        <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                        <!-- Section 3  --> 
                                        <hr class="mt-4 mb-4">
                                        <h4>
                                            <label class="control-label"><b>Section 3</b></label>
                                        </h4>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Heading</label>
                                                <input name="section3_heading" type="text" minlength=1 maxlength="50" class="form-control"  value="<?=$app_name['message']?> Best Part" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-4">
                                            <div class="col-md-3 col-sm-12">
                                                <label class="control-label">Title 1</label>
                                                <input name="section3_title_image_desc_title1" type="text" minlength=1 maxlength="50" class="form-control"  value='<?php echo (!empty($section3_title_image_desc_title1['message'])) ? $section3_title_image_desc_title1['message'] : "Regular Udpates" ?>' required>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label class="control-label">Title 2</label>
                                                <input name="section3_title_image_desc_title2" type="text" minlength=1 maxlength="50" class="form-control"  value='<?php echo (!empty($section3_title_image_desc_title2['message'])) ? $section3_title_image_desc_title2['message'] : "Competitive Fun" ?>' required>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label class="control-label">Title 3</label>
                                                <input name="section3_title_image_desc_title3" type="text" minlength=1 maxlength="50" class="form-control"  value='<?php echo (!empty($section3_title_image_desc_title3['message'])) ? $section3_title_image_desc_title3['message'] : "Global Community" ?>' required>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label class="control-label">Title 4</label>
                                                <input name="section3_title_image_desc_title4" type="text" minlength=1 maxlength="50" class="form-control"  value='<?php echo (!empty($section3_title_image_desc_title4['message'])) ? $section3_title_image_desc_title4['message'] : "All-age Inclusivity" ?>' required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 col-sm-12">
                                                <?php if(isset($section3_title_image_desc_image1['message']) && !empty($section3_title_image_desc_image1['message'])) { ?>
                                                    <input class="form-control section3_title_image_desc_image1" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section3_title_image_desc_image1">
                                                    <p style="display: none" id="section3_title_image_desc_image1_img_error_msg" class="alert alert-danger"></p>
                                                    <div class="mt-1"><a href='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section3_title_image_desc_image1['message'] ?>' data-lightbox="Logos"><img src='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section3_title_image_desc_image1['message'] ?>' height=50, width=50></a></div>
                                                <?php } else { ?>
                                                    <input class="form-control section3_title_image_desc_image1" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section3_title_image_desc_image1" required>
                                                    <p style="display: none" id="section3_title_image_desc_image1_img_error_msg" class="alert alert-danger"></p>
                                                <?php } ?>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <?php if(isset($section3_title_image_desc_image2['message']) && !empty($section3_title_image_desc_image2['message'])) { ?>
                                                    <input class="form-control section3_title_image_desc_image2" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section3_title_image_desc_image2">
                                                    <p style="display: none" id="section3_title_image_desc_image2_img_error_msg" class="alert alert-danger"></p>
                                                    <div class="mt-1"><a href='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section3_title_image_desc_image2['message'] ?>' data-lightbox="Logos"><img src='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section3_title_image_desc_image2['message'] ?>' height=50, width=50></a></div>
                                                <?php } else { ?>
                                                    <input class="form-control section3_title_image_desc_image2" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section3_title_image_desc_image2" required>
                                                    <p style="display: none" id="section3_title_image_desc_image2_img_error_msg" class="alert alert-danger"></p>
                                                <?php }?>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <?php if(isset($section3_title_image_desc_image3['message']) && !empty($section3_title_image_desc_image3['message'])) { ?>
                                                    <input class="form-control section3_title_image_desc_image3" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section3_title_image_desc_image3">
                                                    <p style="display: none" id="section3_title_image_desc_image3_img_error_msg" class="alert alert-danger"></p>
                                                    <div class="mt-1"><a href='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section3_title_image_desc_image3['message'] ?>' data-lightbox="Logos"><img src='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section3_title_image_desc_image3['message'] ?>' height=50, width=50></a></div>
                                                <?php } else {?>
                                                    <input class="form-control section3_title_image_desc_image3" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section3_title_image_desc_image3" required>
                                                    <p style="display: none" id="section3_title_image_desc_image3_img_error_msg" class="alert alert-danger"></p>
                                                <?php } ?>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <?php if(isset($section3_title_image_desc_image4['message']) && !empty($section3_title_image_desc_image4['message'])) { ?>
                                                    <input class="form-control section3_title_image_desc_image4" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section3_title_image_desc_image4">
                                                    <p style="display: none" id="section3_title_image_desc_image4_img_error_msg" class="alert alert-danger"></p>
                                                    <div class="mt-1"><a href='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section3_title_image_desc_image4['message'] ?>' data-lightbox="Logos"><img src='<?= base_url() . WEB_HOME_SETTINGS_LOGO_PATH . $section3_title_image_desc_image4['message'] ?>' height=50, width=50></a></div>
                                                <?php } else { ?>
                                                    <input class="form-control section3_title_image_desc_image4" type="file" accept="image/jpg,image/png,image/svg+xml,image/jpeg" name="section3_title_image_desc_image4" required>
                                                    <p style="display: none" id="section3_title_image_desc_image4_img_error_msg" class="alert alert-danger"></p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-3 col-sm-12">
                                                <textarea name="section3_title_image_desc_desc1" class="form-control" minlength=1 maxlength="120" id="section3_title_image_desc_desc1" cols="20" rows="5" placeholder="Enter Description for Title 1"><?php echo (isset($section3_title_image_desc_desc1) && !empty($section3_title_image_desc_desc1['message'])) ? $section3_title_image_desc_desc1['message'] : "Regularly Updated Quizzes for a Fresh and Exciting Learning Experience." ?></textarea>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <textarea name="section3_title_image_desc_desc2" class="form-control" minlength=1 maxlength="120" id="section3_title_image_desc_desc2" cols="20" rows="5" placeholder="Enter Description for Title 2"><?php echo (isset($section3_title_image_desc_desc2) && !empty($section3_title_image_desc_desc2['message'])) ? $section3_title_image_desc_desc2['message'] : "Test Your Knowledge and Challenge Others. Compete, Test, Challenge!" ?></textarea>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <textarea name="section3_title_image_desc_desc3" class="form-control" minlength=1 maxlength="120" id="section3_title_image_desc_desc3" cols="20" rows="5" placeholder="Enter Description for Title 3"><?php echo (isset($section3_title_image_desc_desc3) && !empty($section3_title_image_desc_desc3['message'])) ? $section3_title_image_desc_desc3['message'] : "Join the Elite Quiz Global Community and Expand Your Knowledge Together!"?></textarea>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <textarea name="section3_title_image_desc_desc4" class="form-control" minlength=1 maxlength="120" id="section3_title_image_desc_desc4" cols="20" rows="5" placeholder="Enter Description for Title 4"><?php echo (isset($section3_title_image_desc_desc4) && !empty($section3_title_image_desc_desc4['message'])) ? $section3_title_image_desc_desc4['message'] : "Elite Quiz for Kids, Teens, & Adults - Fun Learning for Everyone!"?></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group row">
                                            <div class="col-md-2 col-sm-6">
                                                <input type="submit" name="btnadd" value="Submit" class="<?= BUTTON_CLASS ?> mt-4" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <?php base_url() . include 'footer.php'; ?>


    <script>
        // get the value of all the images
        let images = ['section1_cover_image','section1_image_title_image1','section1_image_title_image2','section1_image_title_image3','section1_image_title_image4','section2_cover_image','section3_title_image_desc_image1','section3_title_image_desc_image2','section3_title_image_desc_image3','section3_title_image_desc_image4'];

        //added in loop to check the upload file validation
        $.each(images, function(index, value) {
            $("." + value).change(function(e) {
                var file, img;

                if ((file = this.files[0])) {
                    img = new Image();

                    //checks only image which are not png or jpg
                    if (file.type !== 'image/png' && file.type !== 'image/jpeg' && file.type !== 'image/jpg' && file.type !== 'image/svg+xml') {
                        $('.' + value).val('');
                        $('#' + value + '_img_error_msg').html('<?= IMAGE_ALLOW_PNG_JPG_SVG_MSG; ?>');
                        $('#' + value + '_img_error_msg').show().delay(3000).fadeOut();
                    }

                    //gets error when uploading any file rather than image
                    img.onerror = function() {
                        $('.' + value + '_icon').val('');
                        $('#' + value + '_icon_img_error_msg').html('<?= INVALID_IMAGE_TYPE; ?>');
                        $('#' + value + '_icon_img_error_msg').show().delay(3000).fadeOut();
                    };
                    img.src = _URL.createObjectURL(file);
                }
            });
        });
    </script>
</body>

</html>